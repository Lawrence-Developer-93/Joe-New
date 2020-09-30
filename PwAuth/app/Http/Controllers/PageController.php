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

    public function result(Request $request) {
        $input = $request->input('query');
        
        

        // $user = Auth::user();

        // dd($input);
        return redirect('search/' . $input);
        // return view('pages/results', compact('user', 'filteredData', 'input'));
        
    }


    public function search(Request $request, $keyword) {
        // https://api.unsplash.com/search/photos?query=philippines&client_id=hb-UQIJ2DMaPckaJII5nxrC90uYnaVRGTMz3S8WHzJY
        // $client = new Client();
        // $res = $client->request('GET', 'https://api.unsplash.com/search/photos?query='.urlencode($keyword)."&client_id=".env("UNSPLASH_KEY"));
        
        // $search = $request->search;
        // $input = $request->input('query');
        $client = new Client();
        $res = $client->request('GET', "https://api.unsplash.com/search/photos", [
            "query" => [
                "query" => urlencode($keyword),
                "client_id" => env("UNSPLASH_KEY"),
                "per_page" => 100
                ]
            ]);

        $data = $res->getBody();
        
        $data = json_decode($data);
        

        // Get results
        $filteredData = $data->results;

        // dd($filteredData);

        $user = Auth::user();
        // return redirect('search/'.urlencode($keyword));
        return view('pages/results', compact('user', 'filteredData', 'keyword'));
    }








    // public function search(Request $request) {
    //     // https://api.unsplash.com/search/photos?query=philippines&client_id=hb-UQIJ2DMaPckaJII5nxrC90uYnaVRGTMz3S8WHzJY
    //     $input = $request->input('query');
    //     $client = new Client();
    //     // var_dump($input); die;
    //     // dd($input);
    //     // var_dump($request->input('query')); die;
    //     $res = $client->request('GET', "https://api.unsplash.com/search/photos", [
    //         "query" => [
    //             "query" => $input,
    //             "client_id" =>env("UNSPLASH_KEY"),
    //             "per_page" => 100
    //             ]
    //         ]);

    //     $data = $res->getBody();
        
    //     $data = json_decode($data);
        

    //     // Get results
    //     $filteredData = $data->results;

    //     // dd($filteredData);

    //     $user = Auth::user();
    //     return view('pages/results', compact('user', 'filteredData', 'input'));
    // }
}
