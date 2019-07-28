<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    
    protected $table = 'tag';

    protected $fillable = [
        'tag', 'slug'
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function($query){
            $query->slug = str_slug($query->tag,'-');
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }   

     /** Relation */

    public function snippetTags()
    {
        return $this->hasMany('App\Model\SnippetTag','tag_id');
    }

    /** End Relation */



}
