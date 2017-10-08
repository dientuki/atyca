<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class DestinationsController extends Controller
{
  public function show($slug) {

    $slug = 'destino.' . $slug;
    if (View::exists($slug)) {
      return view($slug)->with('selected','destinos');
    }

    abort(404);
  }
}
