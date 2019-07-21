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


    /** action */
    public function checkContributorStar($contributor_id)
    {
        //if empty return true
        return ($this->star()->where('contributor_id',$contributor_id)->count())?false:true;
    }
    
    public function counterView(){
        $view = $this->view;
        $this->view += 1;
        $this->save();
    }
    /** end of action */

     /** Relation */

    public function contributor()
    {
        return $this->belongsTo('App\Model\Contributor','contributor_id');
    }

    public function framework()
    {
        return $this->belongsTo('App\Model\Framework','framework_id');
    }

    public function komentar()
    {
        return $this->hasMany('App\Model\SnippetKomentar','snippet_id');
    }

    public function star()
    {
        return $this->hasMany('App\Model\SnippetStar','snippet_id');
    }

    public function tag()
    {
        return $this->hasMany('App\Model\SnippetTag','snippet_id');
    }

    /** End Relation */



}
