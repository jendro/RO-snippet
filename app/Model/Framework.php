<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Framework extends Model
{
    
    protected $table = 'framework';
    
    /** Relation */

    public function snippet()
    {
        return $this->hasMany('App\Model\Snippet','framework_id');
    }

    /** End Relation */



}
