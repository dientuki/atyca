<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;

class ShowDashboard extends Controller
{
  /**
   * Show the profile for the given user.
   *
   * @return Response
   */
  public function __invoke()
  {
    $inactives = User::getInactiveUsers();
    return view('admin/dashboard', compact('inactives'));
  }
}