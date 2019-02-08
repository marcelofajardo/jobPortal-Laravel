<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApplicantLoginModel extends Authenticatable
{
    use Notifiable;
    
    public $table = 'applicant';

    protected $fillable = ['email',  'password'];

    protected $hidden = ['password',  'remember_token'];
}
