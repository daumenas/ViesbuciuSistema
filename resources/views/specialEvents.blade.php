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
				<h3>Artėjančių renginių sąrašas</h3>
				<div class="">
					<div class="table-responsive">
						<table class="table">
							<tr>
								<th>Pavadinimas</th>
								<th>Miestas</th>
								<th>Data</th>
								<th>Papildoma Informacija</th>

							</tr>

                            <?php
                            $query = "SELECT * FROM tema";
                            $result = DB::select('SELECT * FROM event');
                            foreach($result as $row)
                            {
                            ?>
							<tr>
								<td>{{$row->name}} </td>
								<td>{{$row->city}} </td>
								<td>{{$row->date}} </td>
								<td>{{$row->info}} </td>
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
