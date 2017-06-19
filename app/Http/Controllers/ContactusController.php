<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactForm;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use Prologue\Alerts\Facades\Alert;

class ContactusController extends Controller
{
  public function show() {
    $selected = 'contactenos';
    return view('contactUs', compact('selected'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function send(ContactForm $request)
  {
    Mail::to('dientuki@gmail.com')->send(new ContactFormMail($request->all()));

    Alert::success(trans('contactus.send'))->flash();

    return redirect()->route('contactus.show');
  }

}
