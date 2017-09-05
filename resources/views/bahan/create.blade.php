@extends('layouts.master')

@section('content')
	<h1>Input Data Bahan Kemas</h1>
	<hr>

	<form method="POST" action="/bahan">
		{{csrf_field()}}

	<div class="col-sm-6">
		<div class="form-group">
			<label for="title">Nama Bahan Kemas</label>
			<input type="text" class="form-control" id="nama" name="nama">
		</div>

		<div class="form-group">
			<label for="title">Harga</label>
			<input type="integer" class="form-control" id="harga" name="harga">
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