<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactsRequest;
use App\Models\Contacts;

class ContactsController extends Controller {

    public function submit(ContactsRequest $params)
    {

        $feedback = new Contacts();

        $feedback->name = $params->input('name');
        $feedback->email = $params->input('email');
        $feedback -> subject = $params->input('subject');
        $feedback -> message = $params->input('message');

        $feedback->save();

        return redirect()->route('index')->with('success', 'Сообщение было добавлено');
    }

}
