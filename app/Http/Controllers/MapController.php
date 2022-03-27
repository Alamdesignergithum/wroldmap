<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapController extends Controller
{
    function northAmerica(){
        return view('north-america');
    }
    function southAmerica(){
        return view('south-america');
    }
    function euRope(){
        return view('europeCountries/europes');
    }
    function europeCountryMap($country){
        return view('europeCountries/countries',['countryName'=>$country]);
    }
    function Asia(){
        return view('asiaCountries/asia');
    }
    function asiaCountryMap($country){
        return view('asiaCountries/countries',['countryName'=>$country]);
    }
  
    function Africa(){
        return view('africaCountries/africa');
    }
    function africaCountryMap($country){
        return view('africaCountries/countries',['countryName'=>$country]);
    }

    function Australia(){
        return view('australia');
    }
    function Contact(){
        return view('contact');
    }
    function Page(){
        return view('page');
    }
}