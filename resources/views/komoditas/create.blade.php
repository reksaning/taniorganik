@extends('layouts.master')

@section('content')
	<h1>Input Data Komoditas</h1>
	<hr>

	<form method="POST" action="/komoditas">
		{{csrf_field()}}

	<div class="col-sm-6">
		<div class="form-group">
			<label for="title">Nama Komoditas</label>
			<input type="text" class="form-control" id="nama" name="nama">
		</div>

		<div class="form-group">
			<label for="title">Lama Tanam (hari)</label>
			<input type="integer" class="form-control" id="waktu" name="waktu">
		</div>

		<div class="form-group">
			<label for="body">Kapasitas Produksi (kg/m<sup>2</sup>) </label>
			<input type="integer" class="form-control" id="kapasitas" name="kapasitas">
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