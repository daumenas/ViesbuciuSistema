<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CityController extends Controller
{
    //

    public function Kaunas()
    {
        return view('Kaunas');
    }
    public function Vilnius()
    {
        return view('Vilnius');
    }
    public function Klaipeda()
    {
        return view('Klaipeda');
    }
    public function Alytus()
    {
        return view('Alytus');
    }
    public function Panevezys()
    {
        return view('Panevezys');
    }
    public function Siauliai()
    {
        return view('Siauliai');
    }
}
