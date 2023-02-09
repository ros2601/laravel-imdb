<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class searchcontroller extends Controller
{
    //for search
    public function search (Request $request) 
    {
        $search=$request->get('search');

        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://imdb8.p.rapidapi.com/auto-complete?q=$search",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
              "X-RapidAPI-Host: imdb8.p.rapidapi.com",
              "X-RapidAPI-Key: 79b7873b36msh62aa8f43e09c756p1adf2ejsnfb16dc246642"
            ],
          ]);
    
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
    
        if ($err) {
            echo "cURL Error #:" . $err;
        }
        else {
            $data = json_decode($response, true);
            return view('search',compact('data'));
        }
    }
   //shows details description of movie
       public function show($id)
    {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://imdb8.p.rapidapi.com/title/get-overview-details?tconst=$id",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: imdb8.p.rapidapi.com",
                "X-RapidAPI-Key: 79b7873b36msh62aa8f43e09c756p1adf2ejsnfb16dc246642"
            ],
        ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);

    if ($err) 
    {
    echo "cURL Error #:" . $err;
    } 
    else{
    $data = json_decode($response);
    return view('show',compact('data'));
    }   
}
}
