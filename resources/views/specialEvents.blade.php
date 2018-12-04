@extends('layouts.app')
@section('content')
	<body>
	<div class="">
		<div id="camera_wrap" class="">
		</div>
	</div>
	</div>
	<!--==============================Content=================================-->
	<div class="content" style="background: #ecd3b0">
		<div class="container_12">
			<div class="clear"></div>
			<div class="grid">
				<h3>Artėjančių renginių sąrašas</h3>
				<div class="">
					<div class="table-responsive" style="background: white">
						<table class="table">
							<tr>
								<th>Pavadinimas</th>
								<th>Miestas</th>
								<th>Data</th>
								<th>Papildoma Informacija</th>
								@if(Auth::user()->role == 2 || Auth::user()->role == 1) <th><a href="{{ route('redirectAddEvent') }}">Pridėti renginį</a></th>@endif

							</tr>

                            <?php
                            $result = DB::select('SELECT * FROM event');
                            foreach($result as $row)
                            {
                            ?>
							<tr>
								<td>{{$row->name}} </td>
								<td>{{$row->city}} </td>
								<td>{{$row->date}} </td>
								<td>{{$row->info}} </td>
								@if(Auth::user()->role == 2) <td><a href="{{route('redirectAddEvent')}}">Edit</a></td>@endif
								@if(Auth::user()->role == 2) <td><a href="{!! route('DeleteEvent', ['id'=>$row->id]) !!}">Delete</a></td>@endif
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
