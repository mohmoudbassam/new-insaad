<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\EditRoleRequest;
use App\Http\Requests\Dashboard\StoreRoleRequest;
use App\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesController extends Controller
{
    public function index()
    {
        abort_if(!auth()->user()->can('view role'), 403);

        $roles = Role::orderBy("created_at", "DESC")->get();

        return view("dashboard.roles.index", compact("roles"));
    }

    public function create()
    {
        abort_if(!auth()->user()->can('create role'), 403);

        $permissions = Permission::all();

        return view("dashboard.roles.create", compact('permissions'));
    }

    public function store(StoreRoleRequest $request)
    {
        $role = Role::create(['name' => $request->name]);

        $role->givePermissionTo($request->permissions);

        return redirect()->route('roles.index', app()->getLocale())->with(
            "success",
            trans('dashboard.It was done successfully!')
        );
    }

    public function edit(Role $role)
    {
        abort_if(!auth()->user()->can('update role'), 403);

        $permissions = Permission::all();

        return view("dashboard.roles.edit", compact("role", 'permissions'));
    }

    public function update(EditRoleRequest $request, Role $role)
    {
        $role->update($request->except(["image", '_token', "_method"]));

        $role->syncPermissions($request->permissions);

        return redirect()->route('roles.index', app()->getLocale())->with(
            "success",
            trans('dashboard.It was done successfully!')
        );
    }

}
