<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactForm;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use Prologue\Alerts\Facades\Alert;

class ContactusController extends Controller
{
  private $email = 'info@atyca.tur.ar';

  public function showW() {
    $selected = 'contactenos';
    return view('contactUsWorld', compact('selected'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function sendW(ContactForm $request)
  {
    Mail::to($this->email)->send(new ContactFormMail($request->all()));

    Alert::success(trans('contactus-world.send'))->flash();

    return redirect()->route('contactus-world.show');
  }

  public function showAR() {
    $selected = 'contactenos';
    return view('contactUsAR', compact('selected'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function sendAR(ContactForm $request)
  {
    Mail::to($this->email)->send(new ContactFormMail($request->all()));

    Alert::success(trans('contactus-ar.send'))->flash();

    return redirect()->route('contactus-ar.show');
  }

}
