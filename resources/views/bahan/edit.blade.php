@extends('layouts.master')

@section('content')
	<h1>Edit Data Bahan Baku</h1>
	<hr>

	<form method="POST" action="/bahan/{{$bahan->id}}">
		{{csrf_field()}}
		{{ method_field('PUT') }}

	<div class="col-sm-6">
		<div class="form-group">
			<label for="title">Nama Bahan Baku</label>
			<input value="{{$bahan->nama}}" type="text" class="form-control" id="nama" name="nama">
		</div>

		<div class="form-group">
			<label for="title">Harga</label>
			<input value="{{ $bahan->harga }}" type="integer" class="form-control" id="harga" name="harga">
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