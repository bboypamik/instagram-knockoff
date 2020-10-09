<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage(){

        $imagePath = ($this->image) ?  $this->image : 'profile/9cYQNEkJYOZio86qPwQdFqtlyAvkIQwx7KYqWqBu.png';

        return '/storage/'. $imagePath;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function user(){

        return $this->belongsTo(User::class);
    }
}
