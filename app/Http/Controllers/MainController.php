<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Phonebook;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;


class MainController extends Controller
{
    public function index()
    {
        $users = Phonebook::orderBy('name')->paginate(10);
        return view('home', compact('users'));
    }
    public function search(Request $request){
        $s = $request->s;
        $contacts = Contact::where('contact_name', 'LIKE', "%{$s}%")->get();
        return view('search', compact('contacts'));
        //echo ($contacts);
        //$users = Phonebook::where('name', 'LIKE', "%{$s}%")->paginate(10);
        //return view('home', compact('contacts'));
    }

    public function submit(ContactRequest $req){
        $user = new Phonebook();
        $user->name = $req->input('name');
        $user->email = $req->input('email');
        $user->phone = $req->input('phone');
        $user->city = $req->input('city');
        $user->save();
        return redirect()->route('home')->with('success','Контакт добавлен');


    }


}
