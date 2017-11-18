@extends('layouts.master')

@section('content')
	<h1>Input Data Komoditas</h1>
	<hr>

	<form method="POST" action="/commodity">
		{{csrf_field()}}

	<div class="col-sm-6">
		<div class="form-group">
			<label for="title">Nama Komoditas</label>
			<input type="text" class="form-control" id="name" name="name">
		</div>

		<div class="form-group">
			<label for="title">Lama Tanam (hari)</label>
			<input type="integer" class="form-control" id="time" name="time">
		</div>
			<hr>
		<div class="row">	
			<div class="form-group">
				<button type="submit" class="btn btn-secondary">Kirim</button>
			</div>
		</div>
	</div>
	
	</form>
	@include('layouts.errors')



@endsection	