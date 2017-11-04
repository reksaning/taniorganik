@extends('layouts.master')
@section('content')




<h1>Input Data Transaksi</h1>
	<hr>

	<form method="POST" action="/produksi">
		{{csrf_field()}}

	<div class="col-sm-6">
		<input type="hidden" name="supplier_id" value="{{ request('supplier_id') }}"><label>BAJAN</label>

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
					
					<input type="hidden" name="komoditas_id" value="{{$komoditas->id}}"><label>{{$komoditas->nama}} </label>
					<input type="integer" class="form-control" id="jumlah" name="jumlah">
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