<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function store(Request $request)
    {
        DB::table('event')->insert(['name' => $request->Name, 'city' => $request->City, 'info' => $request->Info, 'date' => $request->Date]);
        return view('specialEvents');
    }

    public function delete($id)
    {
        DB::table('event')->delete(['id' => $id]);
        return redirect('/');
    }
}
