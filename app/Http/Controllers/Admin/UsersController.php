<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreUser;
use App\Http\Requests\UpdateUser;
use App\Mail\UserActivated;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Prologue\Alerts\Facades\Alert;

class UsersController extends Controller
{
    protected $rol =  array('0' => 'Usuario', '1' => 'Administrador');

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User();
        $action = 'create';
        $form_data = array('route' => 'admin::users::store', 'method' => 'POST');
        $rol = $this->rol;
        $selected = 'users';

        return view('admin/users/form', compact('action', 'user',  'form_data', 'rol', 'selected'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUser $request)
    {

        $data = $request->all();

        User::create($data);

        Alert::success(trans('users.crud.added'))->flash();

        return redirect()->route('admin::dashboard');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::getEdit($id);

        $action    = 'update';
        $form_data = array('route' => array('admin::users::update', $user->id), 'method' => 'PATCH');
        $rol = $this->rol;

        return view('admin/users/form', compact('action', 'user', 'form_data', 'rol'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUser $request, $id)
    {
        $user = User::getEdit($id);

        $data = $request->all();

        $user->fill($data)->save();

        Alert::success(trans('users.crud.updated'))->flash();

        return redirect()->route('admin::dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Auth::user()->id == $id){
            Alert::error(trans('validation.user.delete-my-user'))->flash();
        } else {
            User::destroy($id);
            Alert::success(trans('users.crud.deleted'))->flash();
        }

        return redirect()->route('admin::dashboard');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function activate($id)
    {
        User::setActivateValue($id, true);
        Alert::success(trans('users.activate.success'))->flash();

        $user = User::getEdit($id);
        Mail::to($user->email)->send(new UserActivated($user));

        return redirect()->route('admin::dashboard');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deactivate($id)
    {
        User::setActivateValue($id, false);
        trans('users.deactivate.success');
        return redirect()->route('admin::dashboard');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function toogle($id)
    {

        User::toogleActivate($id);

        $user = User::getEdit($id);

        if ($user->active == 1) {
            Mail::to($user->email)->send(new UserActivated($user));
        }
    }
}
