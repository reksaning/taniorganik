@extends('layouts.master')

@section('content')
	<h1>Edit Data Komoditas</h1>
	<hr>

	<form method="POST" action="/komoditas/{{$komoditas->id}}">
		{{csrf_field()}}
		{{ method_field('PUT') }}

	<div class="col-sm-6">
		<div class="form-group">
			<label for="title">Nama Komoditas</label>
			<input value="{{$komoditas->nama}}" type="text" class="form-control" id="nama" name="nama">
		</div>

		<div class="form-group">
			<label for="title">Lama Tanam (hari)</label>
			<input value="{{ $komoditas->waktu }}" type="integer" class="form-control" id="waktu" name="waktu">
		</div>

		<div class="form-group">
			<label for="body">Kapasitas Produksi (kg/m<sup>2</sup>) </label>
			<input type="integer" value="{{ $komoditas->kapasitas }}" class="form-control" id="kapasitas" name="kapasitas">
		</div>
			<hr>
		<div class="row">	
			<div class="form-group">
				<button type="submit" class="btn btn-secondary">Selesai</button>
			</div>
		</div>
	</div>
	

	
		


	</form>
	@include('layouts.errors')



@endsection	