<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index() {

        $movie = Movie::all();

        $data = [
            'movies' => $movie
        ];

        return view('home', $data);
    }
}
