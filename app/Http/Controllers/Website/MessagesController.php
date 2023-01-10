<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\StoreMailRequest;
use App\Mail\ContactusMail;
use App\Models\Message;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    public function index()
    {
        return view("website.contact-us.index");
    }

    public function store(StoreMailRequest $request)
    {
        $message = Message::create($request->validated());
//        Mail::to("info@softtera.net")->send(new ContactusMail($message));
        return redirect()->back();
    }
}
