@extends('layouts.master')
@section('content')



<h1>Input Data Persediaan</h1>
	<hr>

	<form method="POST" action="/stock">
		{{csrf_field()}}

	<div class="col-sm-6">

		<div class="form-group">
			<label for="title">Tanggal</label>
		    <div class="input-group date " data-date="" data-date-format="yyyy-mm-dd">
		          <input class="form-control" id="date" type="text" name="date" readonly="readonly">
		          <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
		    </div>
		</div>
	
		<div class="form-group">
			<label for="packaging_id">Bahan Kemas</label>
				<select class="form-control" id="packaging_id" name="packaging_id">

				@foreach ($packagings as $packaging)
					<option value="{{$packaging->id}}">{{$packaging->name}}</option>
				@endforeach

				</select> 
		</div>

		<div class="form-group">
			<label for="title">Jumlah (pcs)</label>
			<input type="integer" class="form-control" id="quantity" name="quantity">
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







 	<script src="/js/bootstrap-datepicker.js"></script>
	<script>
	$(".input-group.date").datepicker({autoclose: true, todayHighlight: true});
	</script>

  
@endsection