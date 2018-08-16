<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;

class ScrappingBot extends Controller
{
    //
    public function index()
    {
        return view('scrapping-bot');
    }

    public function scrap(Request $request)
    {
        $response = $request->all();
        return json_encode($response);
    }
}
