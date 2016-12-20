<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'countries';


  static public function getAutocomplete($country = null){
    $query = Country::select('id', 'country as value')->orderBy('country');

    if ($country != null) {
      $query->where('country', 'like', '%' . $country . '%');
    }

    return $query->get();

  }
}