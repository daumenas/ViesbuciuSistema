@extends('layouts.app')
@section('content')
    <body>
    <div class="">
        <div id="camera_wrap" class="">
        </div>
    </div>
    </div>
    <!--==============================Content=================================-->
    <div class="content">
        <div class="container_12">
            <div class="clear"></div>
            <div class="grid_6">
            </div>
            <div class="grid_6">
                <h3>Vartotojų sąrašas</h3>
                <div class="">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Vardas</th>
                                <th>El.paštas</th>
                                <th>Teisės</th>

                            </tr>

                            <?php
                            $query = "SELECT * FROM users";
                            $result = DB::select('SELECT * FROM users');
                            foreach($result as $row)
                            {
                            ?>
                            <tr>
                                <td>{{$row->name}} </td>
                                <td>{{$row->email}} </td>
                                <td> @if($row->role == "2") Admin @endif @if($row->role == "1") Viešbučių vadovas @endif @if($row->role == "0") Vartotojas @endif </td>
                                <td><a href="{!! route('deleteUser', ['id'=>$row->id]) !!}">Delete</a></td>
                            </tr>
                            <?php

                            }
                            ?>


                        </table>
                    </div>
                    <div class="clear cl1"></div>
                </div>
            </div>
        </div>
    </div>
    </body>
@endsection
