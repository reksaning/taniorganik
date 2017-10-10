@extends('layouts.master')

@section('content')
	<h1>Edit Data Petani</h1>
	<hr>

	<form method="POST" action="/petani/{{$petani->id}}">
		{{csrf_field()}}
		{{ method_field('PUT') }}

	<div class="col-sm-6">
		<div class="form-group">
			<label for="title">Nama Petani</label>
			<input value="{{$petani->nama}}" type="text" class="form-control" id="nama" name="nama">
		</div>

		<div class="form-group">
			<label for="title">Alamat</label>
			<input value="{{ $petani->alamat }}" type="text" class="form-control" id="alamat" name="alamat">
		</div>

		<div class="form-group">
			<label for="body">Luas Lahan (m<sup>2</sup>) </label>
			<input type="integer" value="{{ $petani->luas }}" class="form-control" id="luas" name="luas">
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