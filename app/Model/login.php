<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class login extends Model
{
    public $timestamp = false;
    protected $guard = [];
    protected $table =  'user'; 
    //
}
