<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

  public function getIndex() {
    #process params
    #talk to model
    #receive from model
    #compile or process data from model
    #pass the data to the correct view
    return view('pages.welcome');

  }

  public function getAbout() {
    return view('pages.about');
  }

  public function getContact() {
    return view('pages.contact');
  }

}
