<?php

namespace App\Http\Controllers\UserLogged;

use App\Http\Requests\EditProfile;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Prologue\Alerts\Facades\Alert;

class UserController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user = User::getEdit(Auth::user()->id);

        $action    = 'update';
        $form_data = array('route' => array('private::update', $user->id), 'method' => 'PATCH');

        return view('private/profile-form', compact('action', 'user', 'form_data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditProfile $request)
    {
        $user = User::getEdit(Auth::user()->id);

        $data = $request->all();

        $user->fill($data)->save();

        Alert::success(trans('users.loggued.updated'))->flash();

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        User::destroy(Auth::user()->id);
        Auth::logout();
        Alert::success(trans('users.loggued.deleted'))->flash();
        return redirect()->route('home');
    }
}
