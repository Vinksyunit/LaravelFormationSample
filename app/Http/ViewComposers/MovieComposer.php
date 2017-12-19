<?php

namespace FormationLaravel\Http\ViewComposers;

use FormationLaravel\Repositories\Movies;
use FormationLaravel\Movie;
use Illuminate\View\View;

class MovieComposer {

    public function __construct()
    {
        // Dependencies automatically resolved by service container...
    }

    public function compose(View $view) {

        $view->with('movies', Movie::all());
    }
}