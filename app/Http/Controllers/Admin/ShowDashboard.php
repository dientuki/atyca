<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ShowDashboard extends Controller
{
  /**
   * Show the profile for the given user.
   *
   * @return Response
   */
  public function __invoke()
  {
    return view('admin/dashboard');
  }
}