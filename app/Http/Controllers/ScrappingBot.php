<?php

namespace App\Http\Controllers;

use App\Codes;
use InvalidArgumentException;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CodesExport;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Goutte\Client;

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
        $codes = isset($request->codes) ? explode(',', $request->codes) : false;
        $fme = isset($request->fme) ? true : false;
        $dorman = isset($request->dorman) ? true : false;
        $update = isset($request->update) ? true : false;
        if ($codes) {
            foreach ($codes as $code) {
                $fmeCode = '';
                $fmeName = '';
                $dormanCode = '';
                $dormanName = '';
                if ($fme) {

                    $fmeClient = new Client();
                    $fmeCrawler = $fmeClient->request('GET', 'https://www.fme-cat.com/PartInterchange.aspx?pn=' . $code);
                    try {
                        $fmeCode = $fmeCrawler->filter('a#MainPH_MainPH_grdIntPart_hlOurPart_0')->text();
                        $fmeName = $fmeCrawler->filter('span#MainPH_MainPH_grdIntPart_lblProdType_0')->text();

                    } catch (InvalidArgumentException $e) { // I guess its InvalidArgumentException in this case
                        // Node list is empty
                        $fmeCode = "Not Found!";
                    }
                }
                if ($dorman) {
                    $ua = 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.110 Safari/537.36';
                    $dormanClient = new Client();
                    $dormanClient->setClient($dormanClient->getClient());
                    $dormanClient->setHeader('User-Agent', $ua);
                    $dormanClient->setServerParameter('HTTP_USER_AGENT', $ua);
                    $dormanClient->setServerParameter('Content-Type', 'multipart/form-data');
//                    dd($dormanClient);


                    $dormanCrawler = $dormanClient->request('GET', 'https://www.dormanproducts.com/gsearch.aspx?type=oesearch&origin=oesearch&q=' . $code);
                    try {
                        $dormanCode = $dormanCrawler->filter('span#rptDetails_ctl00_lblProductName');
                        dd($dormanCode);
                        $dormanName = $dormanCrawler->filter('h4')->text();
                    } catch (InvalidArgumentException $e) { // I guess its InvalidArgumentException in this case
                        // Node list is empty
                        $dormanCode = "Not Found!";
                    }
                }
                Codes::updateOrCreate(['code' => $code], [
                    'fme' => $fmeCode,
                    'fme_name' => $fmeName,
                    'dorman' => $dormanCode,
                    'dorman_name' => $dormanName
                ]);

            }

        }

        //return Excel::download(new CodesExport(), 'codes.xlsx');
    }
}
