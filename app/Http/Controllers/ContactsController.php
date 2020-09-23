<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller {

    public function submit(Request $params)
    {
        $this -> validate($params,[
            'name' => 'required',
            'email' => 'required',
        ]);
    }

}
