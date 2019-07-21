<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SnippetStar extends Model
{
    
    protected $table = 'snippet_star';

    protected $fillable = [
        'contributor_id', 'snippet_id'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function($query){
            $query->contributor_id = auth()->user()->id;
        });
    }

     /** Relation */

    public function contributor()
    {
        return $this->belongsTo('App\Model\Contributor','contributor_id');
    }

    public function snippet()
    {
        return $this->belongsTo('App\Model\Snippet','snippet_id');
    }

    /** End Relation */



}
