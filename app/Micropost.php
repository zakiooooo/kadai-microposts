<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
    protected $fillable = ['content', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    // public function be_favorite()
    // {
    //     return $this->belongsToMany(User::class, 'user_micropost', 'user_id', 'micropost_id')->withTimestamps();
    // }
    
    
    // public function favorite()
    // {
    //     // confirm if already favorite
    //     $exist = $this->is_favorite($postId);
    
    //     if ($exist) {
    //         return false;
    //     } else {
    //         // follow if not following
    //         $this->be_favorite()->attach($postId);
    //         return true;
    //     }
    // }
    
    // public function unfavorite(){
    //     // confirming if already following
    //     $exist = $this->is_favorite($postId);
    
    
    //     if ($exist) {
    //         // stop following if following
    //         $this->be_favorite()->detach($postId);
    //         return true;
    //     } else {
    //         // do nothing if not following
    //         return false;
    //     }
    // }
    
    // public function is_favorite(){
    //     return $this->be_favorite()->where('micropost_id', $postId)->exists();
    // }
}