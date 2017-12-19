<?php

namespace FormationLaravel;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //
    protected $table = 'movies';

    protected $fillable = ['title', 'author', 'year', 'desc'];

    public function getAuthorAttribute($author) {
        $splited = explode(' ', $author);
        $first = array_shift($splited);
        return [
            'firstname' => $first,
            'lastname' => implode(' ', $splited)
        ];
    }
    
}
