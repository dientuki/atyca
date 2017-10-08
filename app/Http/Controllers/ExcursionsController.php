<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class ExcursionsController extends Controller
{
  public function show($slug) {

    $slug = 'excursion.' . $slug;
    if (View::exists($slug)) {
      return view($slug)->with('selected','excursiones');
    }

    abort(404);
  }
}
