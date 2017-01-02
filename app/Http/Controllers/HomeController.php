<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
  public function show() {

    $selected = 'home';
    $is_loggued = Auth::check();
    $user = Auth::user();
    //dd($user);
    return view('home', compact('selected', 'is_loggued', 'user'));

  }
}
