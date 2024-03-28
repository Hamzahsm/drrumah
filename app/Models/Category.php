<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use App\Models\User;
use Cviebrock\EloquentSluggable\Sluggable; //eloquent sluggable

class Category extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = [
        'id'
    ];

    /**
     * 
     * sluggable
     * 
     */
    public function sluggable(): array {
        return [
            'slug' => [
                'source' => 'name'
            ] 
        ];  
    }


    //eloquent relationship
    public function post() {
        return $this->hasMany(Post::class);
    }

    /**
     * 
     * eloquent relationship
     * 
     */
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }   
}
