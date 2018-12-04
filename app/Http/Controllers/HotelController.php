<?php

namespace App\Http\Controllers;
use DB;
use App\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('hotel')->insert(['name' => $request->Name, 'city' => $request->City, 'extraInfo' => $request->ExtraInfo, 'pets' => $request->Pets, 'owner' => $request->Owner]);
        return view('searchHotel');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        DB::table('hotel')->update(['name' => $request->Name, 'city' => $request->Country, 'extraInfo' => $request->ExtraInfo, 'pets' => $request->Pets, 'owner' => $request->Owner]);
        return view('searchHotel');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotel $hotel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        DB::table('hotel')->delete(['id' => $id]);
        return redirect('searchHotel');
    }
}
