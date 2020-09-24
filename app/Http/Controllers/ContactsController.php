<?php

namespace App\Http\Controllers;

use Egulias\EmailValidator\Exception\ConsecutiveAt;
use Illuminate\Http\Request;
use App\Http\Requests\ContactsRequest;
use App\Models\Contacts;
use PhpParser\Node\Const_;
use PHPUnit\TextUI\XmlConfiguration\Constant;

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

    public function getAllData()
    {
        $contacts = new Contacts();
        // $contacts->orderBy('id','desc')->skip(1)->take(2)->get()
        /*
        Шпаргалка по запросам:
        ----------------------
        $contact = new Contact;
        $data = [];

        $data = $contact->all();                                          // все записи
        $data[] = $contact->find(1);                                      // поиск по ID=1
        $data[] = $contact->inRandomOrder()->first();                     // первая случайная запись
        $data = $contact->inRandomOrder()->get();                         // все случайные записи
        $data = $contact->orderBy('id', 'asc')->get();                    // выборка с сортировкой
        $data = $contact->orderBy('id', 'asc')->take(1)->get();           // выборка 1 записи с сортировкой
        $data = $contact->orderBy('id', 'asc')->skip(1)->take(1)->get();  // пропускаем 1 запись, выборка 1 записи с сортировкой
        $data = $contact->where('id', '=', '1')->get();                   // выборка с условием
        */
        return view('messages', [ 'data' => $contacts->where('subject','<>','')->get()]);
    }

    public function getOneData($id)
    {
        $contact = new Contacts();
        return view('detail-message', ['data' => $contact->find($id)] );
    }

    public function updateData($id)
    {
        $contact = new Contacts();

        return view('update-message', [ 'data' => $contact->find($id)] );
    }

    public function updateDataSubmit($id, ContactsRequest $params)
    {
        $contact = new Contacts();

        $feedback = $contact->find($id);

        $feedback->name = $params->input('name');
        $feedback->email = $params->input('email');
        $feedback -> subject = $params->input('subject');
        $feedback -> message = $params->input('message');

        $feedback->save();

        return redirect()->route('contact-data-detail',$id)->with('success', 'Сообщение было обновлено');

    }

    public function deleteData($id)
    {

        $contact = new Contacts;

        $contact->find($id)->delete();

        return redirect()->route('contacts-data')->with('success', 'Сообщение было удалено');

    }
}
