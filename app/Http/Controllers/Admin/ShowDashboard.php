<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class ShowDashboard extends Controller
{
  /**
   * Show the profile for the given user.
   *
   * @return Response
   */
  public function __invoke(Request $request)
  {
    $users = User::getAllUsers();
    $status = $request->session()->get('status');
    //dd($users);
    return view('admin/dashboard', compact('users', 'status'));
  }
}