<?php

namespace App\Models;

use App\Notifications\MailResetPasswordToken;
use App\Traits\Metable;
use Carbon\Carbon;
use DateTime;
use DB;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    use HasRoles;
    use Metable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'account_type',
        'email',

        'password',
        'password2',

        'image',
        'cover',
        'firstname',
        'lastname',
        'fullname',

        'phone',
        'birtday',
        'gender',
        'address',
        'status',

        'created_by',
        'created_at',

    ];





    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'password2',
        'remember_token',
    ];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */


    public static function boot()
    {
        parent::boot();
//        static::creating(function ($model) {
//            $model->url_display =  md5("P@ZZ".$model->email);
//        });

    }

}
