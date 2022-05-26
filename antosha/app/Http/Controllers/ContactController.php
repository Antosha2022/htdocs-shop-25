<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller{
    public function FunctionSubmit (ContactRequest $req) {

      $contact=new Contact();
      $contact->name = $req->input('name');
      $contact->email = $req->input('email');
      $contact->subject = $req->input('subject');
      $contact->message = $req->input('message');


      $contact->save();
      return redirect()->route('home')->with ('success', 'Повідомлення було відправлено');
    }

    public function FunctionAllData(){
    // можна подивитись повний масив
    //   dd(Contact::all());
    return view('UserMessages',['data'=>Contact::all()]);
    }

     public function FunctionShowOneMessage($id){
       $contact=new Contact;
       return view('one-message',['data'=>$contact->find($id)]);
     }

     public function FunctionUpdateMessage($id){
       $contact=new Contact;
       return view('update-message',['data'=>$contact->find($id)]);
     }

     public function FunctionUpdateMessageSubmit ($id, ContactRequest $req) {

       $contact=Contact::find($id);
       $contact->name = $req->input('name');
       $contact->email = $req->input('email');
       $contact->subject = $req->input('subject');
       $contact->message = $req->input('message');

       $contact->save();
       return redirect()->route('contact-data-one',$id)->with ('success', 'Повідомлення було оновлено');
     }

     public function FunctionDeleteMessage($id){
       Contact::find($id)->delete();
       return redirect()->route('contact-data')->with ('success', 'Повідомлення було видалено');
     }

}
