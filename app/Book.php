<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'title', 'author', 'quantity'
    ];

    /**
     * The users that own the book.
     */
    public function users()
    {
        return $this->belongsToMany('App\User', 'users_books')
        			->withPivot('status')
                    ->withTimestamps();
    }
}
