<?php

namespace App\Http\Controllers\Admin;

use App\Mail\UserActivated;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

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
    public function store(Request $request)
    {
        $data = $request->all();

        User::create($data);

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
    public function update(Request $request, $id)
    {
        $user = User::getEdit($id);

        $data = $request->all();

        $user->fill($data)->save();

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
        User::destroy($id);
        return redirect()->route('admin::dashboard');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function activate(Request $request, $id)
    {
        $user = User::getEdit($id);
        User::setActivateValue($id, true);
        $request->session()->flash('status', 'Task was successful!');
        Mail::to($user->email)->send(new UserActivated($user));
        return redirect()->route('admin::dashboard');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deactivate(Request $request, $id)
    {
        User::setActivateValue($id, false);
        $request->session()->flash('status', 'Task was successful!');
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
        //$request->session()->flash('status', 'Task was successful!');
        //return redirect()->route('admin::dashboard');
    }
}
