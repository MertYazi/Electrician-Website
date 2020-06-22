<?php

namespace App\Http\Controllers;

use App\Appearance;
use App\Site;
use App\Slide;
use App\Generation;
use App\Service;
use App\Reference;
use App\Team;
use App\Help;
use App\Contact;
use App\About;
use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AppearanceController extends Controller
{

  public function index()
  {
      $site = Site::first();
      $slides = Slide::all();
      $generation = Generation::first();
      $services = Service::all();
      $services_array = [];
      foreach ($services as $service) {
        array_push($services_array, $service);
      }
      $services_in_three = array_chunk($services_array, 3);
      $team_members = Team::all();
      $help = Help::first();
      $contact = Contact::first();

      return view('home', compact('site', 'slides', 'generation', 'services_in_three', 'team_members', 'help', 'contact'));
  }

  public function about()
  {
      $about = About::first();
      $site = Site::first();
      $contact = Contact::first();

      return view('/about', compact('about', 'site', 'contact'));
  }

  public function contact()
  {
      $site = Site::first();
      $contact = Contact::first();

      return view('/contact', compact('contact', 'site'));
  }

  public function send_contact(Request $request)
  {
      $this->validate_data($request);

      Mail::to('competent_electrician@gmail.com')
          ->send(new ContactUs(request('name'), request('email'), request('subject'), request('message')));

      return redirect()->back()->withInput()->with(['message_sent' => 'Your message has been sent!']);
  }

  public function individual_services(Service $service)
  {
      $all_services = Service::all();
      $site = Site::first();
      $contact = Contact::first();

      return view('/individual_services', compact('service', 'all_services', 'site', 'contact'));
  }

  public function references()
  {
      $references = Reference::all();
      $site = Site::first();
      $contact = Contact::first();

      return view('/references', compact('references', 'site', 'contact'));
  }

  public function services()
  {
      $services = Service::all();
      $site = Site::first();
      $contact = Contact::first();

      return view('/services', compact('services', 'site', 'contact'));
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
