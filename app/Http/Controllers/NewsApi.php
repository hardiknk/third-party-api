<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Http;

class NewsApi extends Controller
{

    public function getNewsData()
    {
        try {
            $response =  Http::get("https://newsapi.org/v2/top-headlines?country=in&category=business&apiKey=" . env('API_KEY'));
            return view("index", ["news_data" => $response["articles"]]);
        } catch (Exception $th) {
            dd($th->getMessage());
        }
    }
}
