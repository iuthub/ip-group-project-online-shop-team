<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Contact; 
use Mail; 

class ContactController extends Controller { 

    public function getContact() { 

     return view('contact_us'); 
   } 

    public function saveContact(Request $request) { 

      $this->validate($request, [
          'name' => ['required','regex:/^[a-zA-Z]{5,}$/'],
          'email' => ['required','regex:/^([1-zA-Z0-1@.\s]{1,255})$/'],
          'subject' => ['required','regex:/^[a-zA-Z\s]{1,32}$/'],
          'phone_number' => 'required',
          'message' => ['required','regex:/^[a-zA-Z\s]{1,255}$/']
      ]);

      $contact = new Contact;

      $contact->name = $request->name;
      $contact->email = $request->email;
      $contact->subject = $request->subject;
      $contact->phone_number = $request->phone_number;
      $contact->message = $request->message;

      $contact->save();
      \Mail::send('contact_email',
             array(
                 'name' => $request->get('name'),
                 'email' => $request->get('email'),
                 'subject' => $request->get('subject'),
                 'phone_number' => $request->get('phone_number'),
                 'user_message' => $request->get('message'),
             ), function($message) use ($request)
               {
                  $message->from($request->email);
                  $message->to('jasur.uzb10@gmail.com');
               });
      
      return back()->with('success', 'Thanks for your message, your email has been sent successfully!');

  }
}