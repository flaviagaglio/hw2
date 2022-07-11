<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // Campi diversi da questi non verranno inseriti nel database. Serve ad evitare che un utente possa aggiornare campi che 
    // non dovrebbe, es: is_admin
    protected $fillable = [
        'username', 'password', 'email', 'name', 'surname'
    ];



    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // Campi che non verranno ritornati da query sul database, per evitare di mostrare contenuti sensibili o 
    // per non ritornare cose che non verranno attivamente utilizzate lato client
    protected $hidden = [
        'password', 'remember_token', 'email_verified_at',  'email', 'updated_at', 'mongoid'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    // Determina quali campi devono essere convertiti in tipi nativi
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


}
 
 

 
