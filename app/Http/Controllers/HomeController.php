<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
//use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth'); // without you're already logged in
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        //$user = Auth::user();
        
        //if(empty($user)){
        //    return 'You must be logged!';
        //}
        

        $allPosts = Post::all();

        //$dato = 'una valore';
        //$dato1 = 'una valore1';
        //$dato2 = 'una valore2';
        //$dato3 = 'una valore3';

        //return view('home', ['dato'=> 'io sono un dato']);
        return view('home', compact('allPosts'));
    }
}
