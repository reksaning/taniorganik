@extends('layouts.master')
@section('content')



<h1>Input Stock Bahan</h1>
	<hr>

	<form method="POST" action="/stockbahan">
		{{csrf_field()}}

	<div class="col-sm-6">

		<div class="form-group">
			<label for="title">Tanggal</label>
		    <div class="input-group date " data-date="" data-date-format="yyyy-mm-dd">
		          <input class="form-control" id="tanggal" type="text" name="tanggal" readonly="readonly">
		          <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
		    </div>
		</div>
		
    <div class="bahan">
		<div class="form-group">
			<label for="bahan_id">Bahan Kemas</label>
				<select class="form-control" id="bahan_id" name="bahan_id">
				@foreach ($bahans as $bahan)
					<option value="{{$bahan->id}}">{{$bahan->nama}}</option>
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







      <script src="public/js/bootstrap-datepicker.js"></script>
<script>
$(".input-group.date").datepicker({autoclose: true, todayHighlight: true});
</script>

  
@endsection