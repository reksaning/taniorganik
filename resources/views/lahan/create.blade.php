@extends('layouts.master')
@section('content')



<h1>Input Lahan Tanam</h1>
	<hr>

	<form method="POST" action="/lahan">
		{{csrf_field()}}

	<div class="col-sm-6">

		<div class="petani">
			<div class="form-group">
				<label for="petani_id">Nama Petani</label>
					<select class="form-control" id="petani_id" name="petani_id">
					@foreach ($petanis as $petani)
						<option value="{{$petani->id}}">{{$petani->nama}}</option>
					@endforeach

					</select>
			</div> 
		</div>
		
    <div class="komoditas">
		<div class="form-group">
			<label for="komoditas_id">Sayuran Yang Ditanam</label>
				<select class="form-control" id="komoditas_id" name="komoditas_id">
				@foreach ($komoditases as $komoditas)
					<option value="{{$komoditas->id}}">{{$komoditas->nama}}</option>
				@endforeach

				</select>
		</div> 
	</div>


		<div class="form-group">
			<label for="title">Luas Lahan yang Digunakan</label>
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