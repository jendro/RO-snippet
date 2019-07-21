<?php

namespace App\Model;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Image;

class Contributor extends Authenticatable
{
    
    protected $table = 'contributor';

    protected $fillable = [
        'id', 'nickname', 'name', 'email', 'company',	'blog',	'location',	'bio', 'avatar'
    ];
    

    /** action */
    public function updateAvatar($avatar)
    {
        if(!empty($avatar)) {
            //upload image
            $avatar->move(
                public_path() . '/images/web/avatar/',
                $avatar_path = 'avatar-'.$this->id.'.'.$avatar->getClientOriginalExtension()
            );
            $image_path = public_path() . '/images/web/avatar/'.$avatar_path;
            //resize image
            $img = Image::make($image_path)
                ->resize(300, null, 
                    function ($constraint) {
                        $constraint->aspectRatio();
                    })
                ->crop(300, 300)
                ->save($image_path);
            //update db
            $this->update(['avatar'=>asset('images/web/avatar/'.$avatar_path)]);
        }
    }

    public function authorization($user)
    {
        return $user->id==$this->id;
    }

    /** end action */

    /** Relation */

    public function snippet()
    {
        return $this->hasMany('App\Model\Snippet','contributor_id');
    }

    /** End Relation */



}
