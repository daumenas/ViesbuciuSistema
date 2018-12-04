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
            <div class="grid">
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
                                $id = Auth::id();


                            $result = DB::select("SELECT * FROM users WHERE id = '$id'");

                            foreach($result as $row)
                            {

                            ?>
                            <tr>
                                <td>{{$row->name}} </td>
                                <td>{{$row->email}} </td>
                                <td> @if($row->role == "2") Admin @endif @if($row->role == "1") Viešbučių vadovas @endif @if($row->role == "0") Vartotojas @endif </td>
                            </tr>
                            <?php

                            }
                            ?>
                            <tr>
                                <th>Vardas</th>
                                <th>Miestas</th>
                                <th>Paštas</th>
                                <th>Viešbutis</th>
                                <th>Check-in</th>
                                <th>Check-out</th>
                                <th>Komforto lygis</th>
                                <th>Suaugę žmonės</th>
                                <th>Vaikai</th>
                                <th>Kambarių skaičius</th>
                                <th>Papildoma informacija</th>


                            </tr>

                            <?php
                            $email = Auth::user()->email;
                            $name = Auth::user()->name;


                            $result2 = DB::select("SELECT * FROM reservation WHERE name = '$name' AND email = '$email'");

                            foreach($result2 as $row)
                            {

                            ?>
                            <tr>
                                <td>{{$row->name}} </td>
                                <td>{{$row->city}} </td>
                                <td>{{$row->email}} </td>
                                <td>{{$row->hotel}} </td>
                                <td>{{$row->checkin}} </td>
                                <td>{{$row->checkout}} </td>
                                <td>{{$row->comfort}} </td>
                                <td>{{$row->adults}} </td>
                                <td>{{$row->children}} </td>
                                <td>{{$row->rooms}} </td>
                                <td>{{$row->extraInfo}} </td>
                               <td><a href="{!! route('editUser', ['id'=>$row->id]) !!}">Edit</a></td>
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
