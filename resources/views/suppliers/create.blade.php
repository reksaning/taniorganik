@extends('layouts.master')

@section('content')
	<h1>Input Data Supplier</h1>
	<hr>

	<form method="POST" action="/supplier">
		{{csrf_field()}}

	<div class="col-sm-6">
		<div class="form-group">
			<label for="title">Nama Supplier</label>
			<input type="text" class="form-control" id="name" name="name">
		</div>

		<div class="form-group">
			<label for="title">Alamat</label>
			<input type="text" class="form-control" id="alamat" name="alamat">
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