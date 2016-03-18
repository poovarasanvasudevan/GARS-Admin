<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * App\User
 *
 * @property-write mixed $password
 * @mixin \Eloquent
 * @property integer $id
 * @property string $firstname
 * @property string $lastname
 * @property string $middlename
 * @property string $email
 * @property string $abhyasiid
 * @property string $image
 * @property integer $passwordattempts
 * @property string $lastpasswordreset
 * @property boolean $active
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereFirstname($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereLastname($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereMiddlename($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereAbhyasiid($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereImage($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePasswordattempts($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereLastpasswordreset($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereActive($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUpdatedAt($value)
 */
class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname',
        'middlename',
        'lastname',
        'email',
        'location',
        'password',
        'abhyasiid',
        'image',
        'passwordattempts',
        'lastpasswordreset',
        'active'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = md5($value);
    }

    public function setAbhyasiidAttribute($value)
    {
        $this->attributes['abhyasiid'] = strtolower($value);
    }

    public function location()
    {
        return $this->hasOne('App\Location');
    }

}
