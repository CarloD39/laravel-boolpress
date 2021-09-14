<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $allPosts = Post::all();

        //$dato = 'una valore';
        //$dato1 = 'una valore1';
        //$dato2 = 'una valore2';
        //$dato3 = 'una valore3';

        //return view('home', ['dato'=> 'io sono un dato']);
        return view('home', compact('allPosts'));
    }
}
