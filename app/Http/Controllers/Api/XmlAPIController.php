<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mtownsend\XmlToArray\XmlToArray;
class XmlAPIController extends Controller
{

    public function index()
    {

        $xmlString = file_get_contents("https://www.lemonde.fr/rss/en_continu.xml");

        $array = XmlToArray::convert($xmlString);

        return $array;
    }
}
