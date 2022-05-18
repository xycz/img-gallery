<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Photo;
use Routes\api;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $albums = [1];
        $photos = [2];

        return view('welcome', compact('albums', 'photos'));
    }
}