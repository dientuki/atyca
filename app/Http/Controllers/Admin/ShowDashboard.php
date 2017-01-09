<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Prologue\Alerts\Facades\Alert;

class ShowDashboard extends Controller
{
  protected $rol =  array('0' => 'Usuario', '1' => 'Administrador');

  /**
   * Show the profile for the given user.
   *
   * @return Response
   */
  public function __invoke(Request $request)
  {
    $users = User::getAllUsers();
    $status = $request->session()->get('status');
    $selected = 'dashboard';
    $rol = $this->rol;
    Alert::success('You have successfully logged in')->flash();
    Alert::success('You have successfully asdfasdflogged in')->flash();
    return view('admin/dashboard', compact('users', 'status', 'selected', 'rol'));
  }
}