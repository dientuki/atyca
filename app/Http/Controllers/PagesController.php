<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class PagesController extends Controller
{
  public function show($slug) {

    $slug = 'static.' . $slug;
    if (View::exists($slug)) {
      return view($slug)->with('selected',$slug);
    }

    abort(404);
  }
}
