<?php
namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Notifications\ResetPassword;
use Hash;

/**
 * Class School
 *
 * @package App
 * @property string $school Name
 * @property string $county
 * @property string $subcounty
 * @property string $email
 * @property string $password
 * @property string $remember_token
*/
class School extends Authenticatable
{
    use Notifiable;
    protected $fillable = ['school_name', 'county', 'subcounty', 'email', 'password', 'remember_token'];
    protected $hidden = ['password', 'remember_token'];
    
    
    
    /**
     * Hash password
     * @param $input
     */
    public function setPasswordAttribute($input)
    {
        if ($input)
            $this->attributes['password'] = app('hash')->needsRehash($input) ? Hash::make($input) : $input;
    }
     

    public function sendPasswordResetNotification($token)
    {
       $this->notify(new ResetPassword($token));
    }
}
