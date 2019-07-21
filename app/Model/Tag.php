<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SnippetTag extends Model
{
    
    protected $table = 'tag';

    protected $fillable = [
        'tag'
    ];

     /** Relation */

    public function snippet()
    {
        return $this->hasMany('App\Model\SnippetTag','tag_id');
    }

    /** End Relation */



}
