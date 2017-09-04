@extends('layouts.master')
@section('content')



<h1>Input Data Transaksi</h1>
	<hr>

	<form method="POST" action="/transaksi">
		{{csrf_field()}}

	<div class="col-sm-6">

		<div class="form-group">
			<label for="title">Tanggal</label>
		    <div class="input-group date " data-date="" data-date-format="yyyy-mm-dd">
		          <input class="form-control" id="tanggal" type="text" name="tanggal" readonly="readonly">
		          <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
		    </div>
		</div>
		
    <div class="komoditas">
		<div class="form-group">
			<label for="komoditas_id">Select list:</label>
				<select class="form-control" id="komoditas_id">
				@foreach ($transaksi->komoditas as $komoditas)
					<option>{{$komoditas->nama}}</option>
				@endforeach

				</select>
		</div> 
	</div>


		<div class="form-group">
			<label for="title">Jumlah</label>
			<input type="integer" class="form-control" id="waktu" name="waktu">
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







      <script src="public/js/bootstrap-datepicker.js"></script>
<script>
$(".input-group.date").datepicker({autoclose: true, todayHighlight: true});
</script>

  
@endsection