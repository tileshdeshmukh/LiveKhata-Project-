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
    protected $fillable = [       
        // '*', 
        // 'cpmname',
        
         'email',
         'password',
         'cmpregistermobile',
        
        // 'cmplogo',
        // 'cmpowner',
        // 'cmpaddress',
        // 'cmpregistrationdetails',
        // 'cmpregistrationmobile',
        // 'ownerpan',
        // 'cmpgstn',
        // 'cmpauthlic',
        // 'bankname',
        // 'branchname',
        // 'bank_account_no',
        // 'IFSC',
        // 'subject',     
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
