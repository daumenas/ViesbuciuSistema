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
                <h3>Visos rezervacijos</h3>
                <div class="">
                    <div class="table-responsive">
                        <table class="table">
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
                            $result = DB::select('SELECT * FROM reservation');
                            foreach($result as $row)
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
                                <td><a href="editTema.php?id=<?php echo $row->id ?>&mk=">Edit</a></td>
                                <td><a href="deleteTema.php?id=<?php echo $row->id ?>&mk=">Delete</a></td>
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