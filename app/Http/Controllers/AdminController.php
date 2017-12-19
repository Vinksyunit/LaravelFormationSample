<?php

namespace FormationLaravel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    //
    public function __construct() {

    }

    public function insert(Request $request) {
        return view('admin.insert');
    }

    public function valid(Request $request) {
        return view('admin.insert');
    }

    public function update($slug) {

    }

    public function delete($slug) {

    }
}
