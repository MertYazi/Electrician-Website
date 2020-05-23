<?php

namespace App\Http\Controllers;

use App\Appearance;
use Illuminate\Http\Request;

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

}
