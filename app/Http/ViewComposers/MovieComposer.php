<?php

namespace FormationLaravel\Http\ViewComposers;

use FormationLaravel\Repositories\Movies;
use Illuminate\View\View;

class MovieComposer {
    protected $movies;

    public function __construct(Movies $movies)
    {
        // Dependencies automatically resolved by service container...
        $this->movies = $movies;
    }

    public function compose(View $view) {

        $view->with('movies', $this->movies->liste);
    }
}