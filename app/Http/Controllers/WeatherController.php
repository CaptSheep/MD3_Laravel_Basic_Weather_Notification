<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    function index() {
        $response = Http::get('https://api.openweathermap.org/data/2.5/weather', [
            "q" => "HaNoi",
            "appid" => "8a2dbc68664b76c083dc3a95dc9f24f1"
        ] );
        $data = json_decode($response->body());
        $currentTime = time();
        return view('weather', compact('data', 'currentTime'));
    }
}
