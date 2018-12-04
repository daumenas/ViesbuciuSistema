<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class ReservationController extends Controller
{


    public function store(Request $request)
    {
        DB::table('reservation')->insert(['name' => $request->Name, 'city' => $request->Country, 'email' => $request->Email, 'hotel' => $request->Hotel, 'checkin' => $request->Checkin, 'checkout' => $request->Checkout, 'comfort' => $request->Comfort, 'adults' => $request->Adults, 'children' => $request->Children, 'rooms' => $request->Rooms, 'extrainfo' => $request->Message]);
        return view('welcome');
    }

}
