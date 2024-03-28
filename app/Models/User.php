<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles; // spatie laravel
use App\Models\Post;
use App\Models\Category;
use Laravel\Scout\Searchable; //searchable


class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, Searchable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * 
     * eloquent relatoinship
     * 
     */
    public function post() {
        return $this->hasMany(Post::class);
    }

    public function category() {
        return $this->hasMany(Category::class);
    }

    /**
     * 
     * feature searchable
     * 
     */
    
     public function toSearchableArray()
     {
         return [
             'name' => $this->name,
         ];
     }
 
     public function getScoutKey(): mixed 
     {
         return $this->name;
     }
 
     public function getScoutKeyName(): mixed
     {
         return 'name';
     } 


}
