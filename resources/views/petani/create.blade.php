@extends('layouts.master')

@section('content')
	<h1>Input Data Petani</h1>
	<hr>

	<form method="POST" action="/petani">
		{{csrf_field()}}

	<div class="col-sm-6">
		<div class="form-group">
			<label for="title">Nama Petani</label>
			<input type="text" class="form-control" id="nama" name="nama">
		</div>

		<div class="form-group">
			<label for="title">Alamat</label>
			<input type="text" class="form-control" id="alamat" name="alamat">
		</div>

		<div class="form-group">
			<label for="body">Luas Lahan (m<sup>2</sup>) </label>
			<input type="integer" class="form-control" id="luas" name="luas">
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