@extends('layouts.master')

@section('content')
	<h1>Update Persediaan Bahan Kemas</h1>
	<hr>

	<form method="POST" action="/stock/{{$stock->id}}">
		{{csrf_field()}}
		{{ method_field('PUT') }}

	<div class="col-sm-6">

		<div class="form-group">
			<label for="title">Tanggal</label>
		    <div class="input-group date " data-date="" data-date-format="yyyy-mm-dd">
		          <input  value="{{$stock->date}}" class="form-control" id="date" type="date" name="date" readonly="readonly">
		          <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
		    </div>
		</div>
		
		<div class="form-group">
			<label for="title">Bahan Kemas</label>
			<input value="{{ $stock->packaging_id }}" type="integer" class="form-control" id="packaging_id" name="packaging_id" readonly="readonly">
		</div>

		<div class="form-group">
			<label for="body">Jumlah (pcs) </label>
			<input type="integer" value="{{ $stock->quantity }}" class="form-control" id="quantity" name="quantity">
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