@extends('layouts.master')
@section('content')



<h1>Plasma</h1>
	<hr>

	<form method="POST" action="/stockbahan">
		{{csrf_field()}}

	<div class="col-sm-6">

		<div class="form-group">
			<label for="title">Tanggal</label>
		    <div class="input-group date " data-date="" data-date-format="yyyy-mm-dd">
		          <input class="form-control" id="tanggal" type="text" name="tanggal" readonly="readonly">
		          <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
		    </div>
		</div>
		
		<table class="table">
		    <thead>
		      <tr>
		        <th rowspan="2">No</th>
		        <th rowspan="2">Komoditas</th>
		        <th colspan="3">Supplier</th>
		        <tr>
		        @foreach ($bahans as $bahan)
		        	<th>{{$bahan->nama}}</th>
		        @endforeach
		        </tr>

		      </tr>
		    </thead>
			<tbody>
			    <?php $nomor = 0; ?>
				@foreach ($bahans as $bahan)
			        <?php $nomor++ ?> 
			        <tr>
			            <th> {{$nomor}}</th>
			            	<td> {{$bahan->nama}}</td>
			            	
			        </tr>
	          	@endforeach
		    </tbody>
		</table>


		{{-- <div class="form-group">
			<label for="title">Jumlah</label>
			<input type="integer" class="form-control" id="jumlah" name="jumlah">
		</div>
 --}}

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