<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CodesExport;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class ScrappingBot extends Controller
{
    public function index()
    {
        return view('scrapping-bot');
    }

    /**
     * @return BinaryFileResponse
     */
    public function scrap(Request $request)
    {
        return Excel::download(new CodesExport(), 'codes.xlsx');
    }
}
