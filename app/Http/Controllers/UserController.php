<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        DB::table('users')->insert(['name' => $request->Name, 'email' => $request->Email, 'password' => $request->Password, 'role' => $request->Role, 'updated_at' => $request->UpdatedAt, 'created_at' => $request->CreatedAt, 'remember_token' => $request->rememberToken]);
        return view('allUsers');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        DB::table('users')->update(['name' => $request->Name, 'email' => $request->Email, 'password' => $request->Password, 'role' => $request->Role, 'updated_at' => $request->UpdatedAt, 'created_at' => $request->CreatedAt, 'remember_token' => $request->rememberToken]);
        return view('allUsers');
    }
    public function editRedirect($id)
    {
        $info = DB::table(users)->where(['id' => $id]);
        return view('allUsers')->with($info);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        DB::table('users')->delete(['id' => $id]);
        return redirect('allUsers');
    }
}
