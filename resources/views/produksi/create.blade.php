@extends('layouts.master')
@section('content')




<h1>Input Data Transaksi</h1>
	<hr>

	<form method="POST" action="/produksi">
		{{csrf_field()}}

	<div class="col-sm-6">
		<input type="hidden" name="supplier_id" value="{{ request('supplier_id') }}"><label></label>
		<input type="hidden" name="tanggal" value="{{ request('tanggal') }}">

	<div>
	<table class="table">
		<thead>
			<tr>
				<th> Komoditas </th>
			</tr>
		</thead>
		<tbody>

			@foreach ($komoditases as $komoditas)
			<tr>
				<th>
					
					<input type="hidden" name="komoditas_id[{{ $loop->index }}]" value="{{$komoditas->id}}"><label>{{$komoditas->nama}} </label>
					<input type="integer" class="form-control" id="jumlah" name="jumlah[{{ $loop->index }}]" value="0">
				</th>
			</tr>		
			@endforeach

		</tbody>
	</table>

	<div class="row">	
			<div class="form-group">
				<button type="submit" class="btn btn-secondary">Kirim</button>
			</div>
		</div>

	</form>
	@include('layouts.errors')


  
@endsection