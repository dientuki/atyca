<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
  public function notHere(){
    return 'not here';
  }

  public function countries(Request $request){
    //return Country::getAutocomplete($request->only('fk_country'))->toJson(); //$needs->json(Input::get('name', null));
    return Country::getAutocomplete($request->input('fk_country'))->toJson(); //$needs->json(Input::get('name', null));
  }
}
