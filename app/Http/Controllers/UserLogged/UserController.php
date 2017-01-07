<?php

namespace App\Http\Controllers\UserLogged;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
    public function update(Request $request)
    {
        $user = User::getEdit(Auth::user()->id);

        $data = $request->all();

        $user->fill($data)->save();

        return redirect()->route('private::edit');
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
        return redirect()->route('home');
    }
}
