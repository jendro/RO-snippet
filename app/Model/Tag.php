<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    
    protected $table = 'tag';

    protected $fillable = [
        'tag'
    ];

     /** Relation */

    public function snippetTags()
    {
        return $this->hasMany('App\Model\SnippetTag','tag_id');
    }

    /** End Relation */



}
