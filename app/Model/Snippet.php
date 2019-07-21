<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Snippet extends Model
{
    
    protected $table = 'snippet';

    protected $fillable = [
        'contributor_id', 'framework_id', 'title', 'description', 'code'
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

    public function framework()
    {
        return $this->belongsTo('App\Model\Framework','framework_id');
    }

    /** End Relation */



}
