<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Traits\Uploadable;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Dashboard\EditUserRequest;
use App\Http\Requests\Dashboard\StoreUserRequest;
use Spatie\Permission\Models\Role;

class UsersController extends Controller
{
    use Uploadable;

    public function index()
    {
        abort_if(! auth()->user()->can('view user'), 403);

        return view('dashboard.users.index');
    }


    public function create()
    {
        abort_if(! auth()->user()->can('create user'), 403);

        $roles = Role::orderBy("created_at", "DESC")->get();

        return view('dashboard.users.create', compact('roles'));
    }


    public function store(StoreUserRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile("image")) {
            $image = $this->uploadOne($request['image'], '100', '100', 'users');
            $data['image'] = $image;
        }

        $data['password'] = Hash::make($data['password']);

        $user = User::create($data);

        $user->assignRole($request->role);

        return redirect()->route('users.index', ['lang' => app()->getLocale()])->with(
            "success",
            trans('dashboard.It was done successfully!')
        );
    }

    public function show($id)
    {
        //
    }


    public function edit(User $user)
    {
        if (auth()->user()->can('update user') || $user->id == auth()->id()) {
            auth()->user()->notifications->where('data.data', $user->id)->markAsRead();
            $roles = Role::orderBy("created_at", "DESC")->get();
            return view('dashboard.users.edit', compact('user', 'roles'));
        }

        abort(403);
    }


    public function update(EditUserRequest $request, User $user)
    {
        $data = $request->validated();

        if (isset($data['password'])) {
            $data['password'] = bcrypt($request['password']);
        } else {
            $data = $request->except('password');
        }

        if ($request->hasFile("image")) {
            $image = $this->uploadOne($request['image'], '100', '100', 'users');
            $data['image'] = $image;
        }

        $user->update($data);

        $user->syncRoles($request->role);

        return redirect()->route('users.index', ['lang' => app()->getLocale()])->with("success",
            trans('dashboard.It was done successfully!'));
    }


    public function destroy(User $user)
    {
        if ($user->role == 'admin') {
            return redirect()->route('users.index');
        }
        $user->delete();

        return redirect()->route('users.index');
    }
}
