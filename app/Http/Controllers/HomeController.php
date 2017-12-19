<?php

namespace FormationLaravel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Session;
use Illuminate\Database\Eloquent\Collection;

class HomeController extends Controller
{
    //
    
    public function home(Request $request, $name) {
        // $slogan = session('slogan');
        $slogan = $request->session()->get('slogan');
        $status = session('status');
        // $result = new Collection([$slogan, $status, "Hello $name"]);
        return (new Response($status))->header('Content-type', 'text/plain')->cookie('nom', 'toto', 30);
        // return (new Response($result->dd()))->header('Content-type', 'text/plain')->cookie('nom', 'toto', 30);
    }
    
    public function homeview() {
        return view('home');
    }
    
    public function redirect() {
        session(['slogan' => 'Pomme de terre']);
        
        return redirect()->action('HomeController@home', ['name' => 'Vincent'])->with('status', 'Page redirigée');
        
        // return redirect()->route('homeredirected', ['name' => 'Vincent2']);
    }
}