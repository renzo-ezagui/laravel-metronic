<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel;

class ScrappingBot extends Controller
{
    private $excel;
    //
    public function __construct(Excel $excel)
    {
        $this->excel = $excel;
    }

    public function index()
    {
        return view('scrapping-bot');
    }

    public function scrap(Request $request)
    {
        $response = $request->all();
//        return json_encode($response);
        return $this->excel->download('asd.xlsx','asd.xlsx');
    }
}
