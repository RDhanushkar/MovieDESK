<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Validator;
use Auth;

class MovieController extends Controller
{
    //
    function index(Movie $movies)
    {
        //$movies = Movie::paginate(10);
        return view('dashboard',compact('movies'));
    }
    function page2(Movie $movies)

    {
        return view('dashboard2',compact('movies'));
    }
    function page1(Movie $movies)

    {
        return view('dashboard',compact('movies'));
    }
    /*
    function detail(Movie $movies)
    {
        $movies = DB::table('movies')->where('movies.id','=',$movies->id);
        return view('detail',compact('movies'));
    }
    
    public function show(Movie $movies)
    {
        return view('detail',compact('movies'));
    }
    */
}
