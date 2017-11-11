@extends('layouts.master')
@section('content')




<h1>Edit Data Transaksi</h1>
	<hr>
		<form method="POST" action="/produksi">
		{{csrf_field()}}
		{{ method_field('PUT') }}

	<div class="col-sm-6">

	<div>
	<table class="table">
		<thead>
			<tr>
				<th> Komoditas </th>
			</tr>
		</thead>
		<tbody>

			@foreach ($produksi as $data)
			<tr>
				<th>
					
					<input type="hidden" name="produksi_id[{{ $loop->index }}]" value="{{$data->id}}"><label>{{$data->komoditas->nama}} </label>
					<input type="integer" class="form-control" id="jumlah" name="jumlah[{{ $loop->index }}]" value="{{$data->jumlah}}">
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