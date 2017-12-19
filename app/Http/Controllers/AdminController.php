<?php

namespace FormationLaravel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use FormationLaravel\Movie;

class AdminController extends Controller
{
    //
    public function __construct() {

    }

    public function insert(Request $request) {
        return view('admin.insert');
    }

    public function update(Request $request, $id) {
        $movie = Movie::find($id);
        if ($movie !== null) {
            return view('admin.insert', ['movie' => $movie]);
        } else {
            return redirect()->route('movieslisting');
        }
    }

    public function valid(Request $request) {
        $params = $request->except('_token');
        if (isset($params['id'])) {
            $movie = Movie::find($params['id']);
        } else {
            $movie = new Movie();
        }
        $movie->title = $params['title'];
        $movie->author = $params['author'];
        $movie->year = $params['year'];
        $movie->desc = $params['desc'];
        $movie->save();
        return redirect()->route('movieslisting');
    }

    public function delete($slug) {

    }
}
