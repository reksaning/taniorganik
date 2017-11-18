@extends('layouts.master')
@section('content')



<h1>Input Data BOM</h1>
	<hr>

	<form method="POST" action="/bom">
		{{csrf_field()}}

	<div class="col-sm-6">

		<div class="form-group">
			<label for="commodity_id">Komoditas</label>
				<select class="form-control" id="commodity_id" name="commodity_id">

				@foreach ($commodities as $commodity)
					<option value="{{$commodity->id}}">{{$commodity->name}}</option>
				@endforeach

				</select> 
		</div>
		<div class="form-group">
			<label for="supplier_id">Supplier</label>
				<select class="form-control" id="supplier_id" name="supplier_id">

				@foreach ($suppliers as $supplier)
					<option value="{{$supplier->id}}">{{$supplier->name}}</option>
				@endforeach

				</select> 
		</div>

		<div class="form-group">
			<label for="title">1 pcs = ...kg </label>
			<input type="integer" class="form-control" id="quantity" name="quantity">
		</div>

		<div class="form-group">
			<label for="packaging_id">Bahan Kemas</label>
				<select class="form-control" id="packaging_id" name="packaging_id">

				@foreach ($packagings as $packaging)
					<option value="{{$packaging->id}}">{{$packaging->name}}</option>
				@endforeach

				</select> 
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