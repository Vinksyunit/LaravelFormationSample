<?php

namespace FormationLaravel;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movie extends Model
{
    use SoftDeletes;
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
