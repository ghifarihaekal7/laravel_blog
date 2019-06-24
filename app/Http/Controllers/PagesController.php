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
    $first = 'Ghifari';
    $last = 'Haekal';

    $fullname = $first . " " . $last;
    $email = 'ghifarihaekal7@gmail.com';
    $data = [];
    $data['email'] = $email;
    $data['fullname'] = $fullname;
    #return view('pages.about')->withFullname($fullname)->withEmail($email);
    return view('pages.about')->withData($data);
  }

  public function getContact() {
    return view('pages.contact');
  }

}
