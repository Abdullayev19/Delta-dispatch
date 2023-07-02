<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Service;
use App\Models\Price;

class PageController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        $services = Service::all();
        $prices = Price::all();

        return view('welcome', compact('abouts', 'services', 'prices'));
    }

    public function contact(Request $request){
        

        $message=<<<TEXT
        Sizga yangi murojat qoldirildi🧑🏻‍💻📩

        Murojatchining ismi: {$request->name}

        Murojatchining Email manzili: {$request->email}

        Murojatchining mavzusi: {$request->subject}

        Murojatchining xabari: {$request->message}

        TEXT;

        $apiToken = "5970435722:AAGbBXtq7YL0WzfQ3VV9bMYBlOiCj-x45Qg";

        $data = [
            'chat_id' => "-1001863378079",
            'text' => $message
        ];

        $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" .http_build_query($data));
        return redirect('/');

    }

}
