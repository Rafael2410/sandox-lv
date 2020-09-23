<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactsRequest;

class ContactsController extends Controller {

    public function submit(ContactsRequest $params)
    {
      /*  $this -> validate($params,[
            'name' => 'required',
            'email' => 'required',
        ]);*/
    }

}
