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
                                <th>Pavadinimas</th>
                                <th>Miestas</th>
                                <th>Įvertinimas</th>
                                <th>Papildoma informacija</th>
                                <th>Palikti Įvertinimą</th>
                                <th>Labai blogai</th>
                                <th>Blogai</th>
                                <th>Patenkinamai</th>
                                <th>Gerai</th>
                                <th>Labai gerai</th>

                            </tr>

                            <?php
                            $result = DB::select('SELECT * FROM hotel');
                            foreach($result as $row)
                            {

                                $name = $row->name;
                            $result2 = DB::select("SELECT * FROM review WHERE hotelName = '$name'");
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
                            $yes = "Yes";

                            ?>
                            <tr>

                                <td>@if($pets == $yes) <img src="images/petFriendly.png" alt="" border=3 height=30 width=30> @endif{{$row->name}} </td>
                                <td>{{$row->city}} </td>
                                <td> @if($rating < 3)  <img src="images/1-2.png" alt="" border=3 height=20 width=20> @endif @if($rating >= 3 && $rating <5) <img src="images/3-4.png" alt="" border=3 height=20 width=20> @endif @if($rating >= 5 && $rating < 7) <img src="images/5-6.png" alt="" border=3 height=20 width=20> @endif @if($rating >= 7 && $rating < 9) <img src="images/7-8.png" alt="" border=3 height=20 width=20> @endif @if($rating >= 9) <img src="images/9-10.png" alt="" border=3 height=20 width=20> @endif </td>
                                <td>{{$row->extraInfo}} </td>
                                <td></td>
                                <td><a href="{!! route('saveReview', ['rating'=>'2', 'hotelName'=>$row->name]) !!}"><img src="images/1-2.png" alt="" border=3 height=20 width=20></a></td>
                                <td><a href="{!! route('saveReview', ['rating'=>'4', 'hotelName'=>$row->name]) !!}"><img src="images/3-4.png" alt="" border=3 height=20 width=20></a></td>
                                <td><a href="{!! route('saveReview', ['rating'=>'6', 'hotelName'=>$row->name]) !!}"><img src="images/5-6.png" alt="" border=3 height=20 width=20></a></td>
                                <td><a href="{!! route('saveReview', ['rating'=>'8', 'hotelName'=>$row->name]) !!}"><img src="images/7-8.png" alt="" border=3 height=20 width=20></a></td>
                                <td><a href="{!! route('saveReview', ['rating'=>'10', 'hotelName'=>$row->name]) !!}"><img src="images/9-10.png" alt="" border=3 height=20 width=20></a></td>

                                <td><a href="editHotel.php?id=<?php echo $row->id ?>&mk=">Edit</a></td>
                                <td><a href="deleteHotel.php?id=<?php echo $row->id ?>&mk=">Delete</a></td>
                                <td><a href="{!! route('reserveHotel', ['city'=>$row->city, 'hotelName'=>$row->name]) !!}">Rezervuoti</a></td>
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
