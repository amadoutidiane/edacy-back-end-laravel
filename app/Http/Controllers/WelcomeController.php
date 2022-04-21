<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {

        $xmlObject = simplexml_load_file("https://www.lemonde.fr/rss/en_continu.xml");
        $rssjsonDatas = json_encode($xmlObject, JSON_PRETTY_PRINT);

        return view('welcome',compact('rssjsonDatas'));
    }
}
