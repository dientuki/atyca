<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactForm;
use App\Mail\ContactFormMail;

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

    $data = $request->all();

    Mail::to('dientuki@gmail.com')->send(new ContactFormMail($data));

    Alert::success(trans('contactus.send'))->flash();

    return redirect()->route('admin::dashboard');
  }

}
