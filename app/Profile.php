<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage(){
        if($this->image){
            return '/storage/'.$this->image;
        }
        else{
            return '/storage/profile/KeanaZXS2c7vtaJJRXfu4ZYZ69Xpiw2e7nnYUIRe.png';
        }
    }

    public function followers(){
        return $this->belongsToMany(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
