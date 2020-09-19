<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;

class PageController extends Controller
{

    // public function __construct() {
    //     $this->middleware('auth');
    // }
        

    public function index() {
        $user = Auth::user();
        return view('pages/home', compact('user'));
    }

    public function result() {
        // https://api.unsplash.com/search/photos?query=philippines&client_id=hb-UQIJ2DMaPckaJII5nxrC90uYnaVRGTMz3S8WHzJY
        $client = new Client();
        $res = $client->request('GET', 'https://api.unsplash.com/search/photos?query=philippines&client_id=hb-UQIJ2DMaPckaJII5nxrC90uYnaVRGTMz3S8WHzJY');
        $data = $res->getBody();
        
        $data = json_decode($data);
        
        $filteredData = [];
        
        // return $data->results;

        foreach($data->results as $result) {
            $urls = $result->urls;

            array_push($filteredData,$result);

            // foreach($urls as $key => $value) {
            //     // var_dump($value);
            //     if ($key === 'small') {
            //         array_push($filteredData,$value);
            //         // array_push($filteredData, $value)
            //     }
            //     // array_push($filteredData, $url['small'])
            //     // array_push($filteredData, $url)
            // }
            
            // var_dump($tags); die;

            // Demby debug

            // foreach ($tags as $tag) {
            //     var_dump($tag); die;
            // }

            // // End demby
            // if (in_array('.jpg', $tags)) {
            //     array_push($filteredData, $result);
            // }
        }
        
        // return count($data->results);

        // var_dump($filteredData); die;

        $user = Auth::user();
        return view('pages/results', compact('user', 'filteredData'));
    }
}
