<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PhotoResource;
use Illuminate\Http\Request;

define("url", "https://jsonplaceholder.typicode.com/photos");

class PhotoController extends Controller
{
    public function index()
    {
        $json = json_decode(curl_get_contents(url));

        return PhotoResource::collection($json);
    }

    public function show($id) {
        $json = json_decode(curl_get_contents(url . '/' . $id));

        return ($json);
    }
}

function curl_get_contents($url)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}
