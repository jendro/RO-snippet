<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SnippetTag extends Model
{
    
    protected $table = 'snippet_tag';

    protected $fillable = [
        'snippet_id', 'tag_id'
    ];

     /** Relation */

    public function snippet()
    {
        return $this->hasMany('App\Model\Snippet','snippet_id');
    }
    
    public function tag()
    {
        return $this->belongsTo('App\Model\Tag','tag_id');
    }

    /** End Relation */



}
