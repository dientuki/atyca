<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'business', 'fk_country', 'rol'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];


    static public function getInactiveUsers(){
        return User::select('users.id as id', 'name', 'email', 'business', 'country', 'rol')
            ->join('countries', 'countries.id', '=', 'users.fk_country')
            ->orderBy('email')
            ->where('rol', 0)
            ->where('active', 0)->get();
    }

    static public function getAdminEmail(){
        return User::select('email')
            ->where('rol', 1)
            ->where('active', true)->get()->first();
    }

    static public function getActiveValue($id){
        return User::select('activate')
            ->where('id', $id)->get()->first();
    }

    public function getCountry(){
        return Country::getCountry($this->fk_country);
    }

    static public function setActivateValue($id, $value = false){
        return User::where('id', $id)->update(['active' => $value]);
    }

}
