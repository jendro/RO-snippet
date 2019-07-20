<?php

namespace App\Model;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Contributor extends Authenticatable
{
    
    protected $table = 'contributor';

    protected $fillable = [
        'id', 'nickname', 'name', 'email', 'company',	'blog',	'location',	'bio', 'avatar'
    ];




}
