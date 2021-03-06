@extends('layouts.master')
@section('content')



<h1>Input Data Permintaan Pasar</h1>
	<hr>

	<form method="POST" action="/transaksi">
		{{csrf_field()}}

	<div class="col-sm-6">

		<div class="form-group">
			<label for="title">Tanggal</label>
		    <div class="input-group date " data-date="" data-date-format="yyyy-mm-dd">
		          <input class="form-control" id="tanggal" type="text" name="date" readonly="readonly">
		          <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
		    </div>
		</div>
		
    <div class="komoditas">
		<div class="form-group">
			<label for="komoditas_id">Nama Komoditas</label>
				<select class="form-control" id="komoditas_id" name="komoditas_id">
				@foreach ($komoditases as $komoditas)
					<option value="{{$komoditas->id}}">{{$komoditas->nama}}</option>
				@endforeach

				</select>
		</div> 
	</div>


		<div class="form-group">
			<label for="title">Jumlah</label>
			<input type="integer" class="form-control" id="jumlah" name="jumlah">
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