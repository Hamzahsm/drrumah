<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Category;
use Cviebrock\EloquentSluggable\Sluggable; //eloquent sluggable
use Laravel\Scout\Searchable; //searchable
use CyrildeWit\EloquentViewable\InteractsWithViews; //eloquent-viewable
use CyrildeWit\EloquentViewable\Contracts\Viewable; //eloqunet-viewable

class Post extends Model implements Viewable
{
    use HasFactory, Sluggable, Searchable, \Conner\Tagging\Taggable, InteractsWithViews;

    protected $guarded = [
        'id'
    ];

    /**
     * 
     * eloquent relationship
     * 
     */
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    /**
     * 
     * sluggable
     * 
     */
    public function sluggable(): array {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];  
    }


    /**
     * 
     * to searchable data post with their slug 
     * 
     */
    // public function getRouteKeyName() {
    //     return 'slug';
    // }

    /**
     * 
     * feature searchable
     * 
     */
    
    public function toSearchableArray()
    {
        return [
            'title' => $this->title,
        ];
    }

    public function getScoutKey(): mixed 
    {
        return $this->title;
    }

    public function getScoutKeyName(): mixed
    {
        return 'title';
    } 

}
