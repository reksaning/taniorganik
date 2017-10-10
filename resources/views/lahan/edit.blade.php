@extends('layouts.master')

@section('content')
	<h1>Edit Data Penanaman</h1>
	<hr>

	<form method="POST" action="/lahan/{{$lahan->id}}">
		{{csrf_field()}}
		{{ method_field('PUT') }}

	<div class="col-sm-6">
		<div class="form-group">
			<label for="petnai_id">Nama Petani</label>
				<select class="form-control" id="petani_id" name="petani_id">
				@foreach ($petanis as $petani)
					<option value="{{$petani->id}}">{{$petani->nama}}</option>
				@endforeach
				</select>
		</div>

		<div class="form-group">
			<label for="komoditas_id">Nama Sayuran</label>
				<select class="form-control" id="komoditas_id" name="komoditas_id">
				@foreach ($komoditases as $komoditas)
					<option value="{{$komoditas->id}}">{{$komoditas->nama}}</option>
				@endforeach
				</select>
		</div>
		
		<div class="form-group">
			<label for="body">Luas Lahan </label>
			<input type="integer" value="{{ $lahan->luas }}" class="form-control" id="luas" name="luas">
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