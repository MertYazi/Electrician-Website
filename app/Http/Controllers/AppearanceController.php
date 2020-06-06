<?php

namespace App\Http\Controllers;

use App\Appearance;
use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AppearanceController extends Controller
{

  public function index()
  {
      return view('home');
  }

  public function about()
  {
      return view('/about');
  }

  public function contact()
  {
      return view('/contact');
  }

  public function send_contact(Request $request)
  {
      $this->validate_data($request);

      Mail::to('competent_electrician@gmail.com')
          ->send(new ContactUs(request('name'), request('email'), request('subject'), request('message')));

      return redirect()->back()->withInput()->with(['message_sent' => 'Your message has been sent!']);
  }

  public function individual_services()
  {
      return view('/individual_services');
  }

  public function references()
  {
      return view('/references');
  }

  public function services()
  {
      return view('/services');
  }

  public function validate_data(Request $request){

      $request->validate([
        'name' => 'required|between:2,255',
        'email' => 'required|email:rfc,dns',
        'subject' => 'required|between:2,255',
        'message' => 'required|between:2,255',
      ]);
  }

}
