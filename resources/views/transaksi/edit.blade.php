@extends('layouts.master')

@section('content')
	<h1>Edit Data Komoditas</h1>
	<hr>

	<form method="POST" action="/transaksi/{{$transaksi->id}}">
		{{csrf_field()}}
		{{ method_field('PUT') }}

	<div class="col-sm-6">

		<div class="form-group">
			<label for="title">Tanggal</label>
		    <div class="input-group date " data-date="" data-date-format="yyyy-mm-dd">
		          <input  value="{{$transaksi->tanggal}}" class="form-control" id="tanggal" type="date" name="tanggal" readonly="readonly">
		          <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
		    </div>
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
			<label for="body">Jumlah (kg) </label>
			<input type="integer" value="{{ $transaksi->jumlah }}" class="form-control" id="jumlah" name="jumlah">
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