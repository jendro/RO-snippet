<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Framework extends Model
{
    
    protected $table = 'framework';
    
    /** Relation */

    public function snippet()
    {
        return $this->hasMany('App\Model\Snippet','contributor_id');
    }

    public function framework()
    {
        return $this->belongsTo('App\Model\Framework','framework_id');
    }

    /** End Relation */



}
