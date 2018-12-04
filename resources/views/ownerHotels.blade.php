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
            <div class="grid">
                <h3>Viešbučių sąrašas</h3>
                <div class="">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Leidžia gyvūnus</th>
                                <th>Pavadinimas</th>
                                <th>Miestas</th>
                                <th>Įvertinimas</th>
                                <th>Papildoma informacija</th>
                                <th>Palikti Įvertinimą</th>
                                <th nowrap> 1-2</th>
                                <th nowrap> 3-4</th>
                                <th nowrap> 5-6</th>
                                <th nowrap> 7-8</th>
                                <th nowrap> 9-10</th>
                                @if(Auth::user()->role == 2 || Auth::user()->role == 1) <th><a href="{{ route('redirectAddHotel') }}">Pridėti Viešbutį</a></th>@endif

                            </tr>

                            <?php
                                $name = Auth::user()->name;
                            $result = DB::select("SELECT * FROM hotel WHERE owner = '$name'");
                            foreach($result as $row)
                            {

                            $name = $row->name;
                            $city = $row->city;
                            $result2 = DB::select("SELECT * FROM review WHERE hotelName = '$name' AND City = '$city'");
                            $rating = 0;
                            $int = 0;
                            foreach ($result2 as $res)
                            {

                                $rating = $rating + $res->rating;
                                $int = $int + 1;
                            }
                            if($int > 0)
                                $rating = $rating / $int;
                            $pets = $row->pets;
                            $yes = "Taip";

                            ?>
                            <tr>

                                <td>@if($pets == $yes) <img src="images/petFriendly.png" alt="" border=3 height=80 width=100> @endif @if($pets != $yes) Ne @endif </td>
                                <td>{{$row->name}} </td>
                                <td>{{$row->city}} </td>
                                <td align="center">@if($rating == 0) Nėra @endif @if($rating < 3 && $rating > 0)  <img src="images/1-2.png" alt="" border=3 height=20 width=20> @endif @if($rating >= 3 && $rating <5) <img src="images/3-4.png" alt="" border=3 height=20 width=20> @endif @if($rating >= 5 && $rating < 7) <img src="images/5-6.png" alt="" border=3 height=20 width=20> @endif @if($rating >= 7 && $rating < 9) <img src="images/7-8.png" alt="" border=3 height=20 width=20> @endif @if($rating >= 9) <img src="images/9-10.png" alt="" border=3 height=20 width=20> @endif </td>
                                <td>{{$row->extraInfo}} </td>
                                <td></td>
                                <td><a href="{!! route('saveReview', ['rating'=>'2', 'hotelName'=>$row->name, 'city'=>$row->city]) !!}"><img src="images/1-2.png" alt="" border=3 height=20 width=20></a></td>
                                <td><a href="{!! route('saveReview', ['rating'=>'4', 'hotelName'=>$row->name, 'city'=>$row->city]) !!}"><img src="images/3-4.png" alt="" border=3 height=20 width=20></a></td>
                                <td><a href="{!! route('saveReview', ['rating'=>'6', 'hotelName'=>$row->name, 'city'=>$row->city]) !!}"><img src="images/5-6.png" alt="" border=3 height=20 width=20></a></td>
                                <td><a href="{!! route('saveReview', ['rating'=>'8', 'hotelName'=>$row->name, 'city'=>$row->city]) !!}"><img src="images/7-8.png" alt="" border=3 height=20 width=20></a></td>
                                <td><a href="{!! route('saveReview', ['rating'=>'10', 'hotelName'=>$row->name, 'city'=>$row->city]) !!}"><img src="images/9-10.png" alt="" border=3 height=20 width=20></a></td>


                                @if(Auth::user()->role == 2 || Auth::user()->role == 1) <td><a href="{{route('reservationForm')}}">Edit</a></td>@endif
                                @if(Auth::user()->role == 2 || Auth::user()->role == 1) <td><a href="{!! route('DeleteHotel', ['id'=>$row->id]) !!}">Delete</a></td>@endif
                                <td><a href="{{route('reservationForm')}}">Rezervuoti</a></td>
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
