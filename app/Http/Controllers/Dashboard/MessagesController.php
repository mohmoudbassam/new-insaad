<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\StoreMailRequest;
use App\Http\Resources\Dashboard\MessageResource;

class MessagesController extends Controller
{


    public function index(Request $request)
    {
        abort_if(!auth()->user()->can('view inbox'), 403);

//        $messages = Message::Received()->orderBy("created_at", "desc")->paginate(10);
//
//        if ($request->ajax()) {
//            return MessageResource::collection($messages);
//        }

        return view("dashboard.messages.index");
    }


    public function create()
    {
        return view("dashboard.messages.create");
    }


    public function store(StoreMailRequest $request)
    {
        Message::create($request->all());

        return redirect(route('messages.index', ['lang' => app()->getLocale()]))->with("success",
            trans('dashboard.It was done successfully!'));
    }


    public function show($id)
    {
        $message = Message::where("id", $id)->first();
        if (! $message) {
            return response()->json(["message" => "messages not found"], 400);
        }

        $message->markAsRead();

        return response()->json(new MessageResource($message), 200);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy(Message $message)
    {
        $message->delete();

        return response()->json(["messages" => trans('dashboard.message deleted successfully!')]);
    }
}
