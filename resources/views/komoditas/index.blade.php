@extends('layouts.master')

@section('content')
<h1>Data Komoditas</h1>	

	<div>
	{{-- <h1>Rata tanam {{ \App\Komoditas::rataLamaTanam() }}</h1> --}}
	
	  <table class="table table-hover">
	        <tr>
	        	<th> No </th>
	            <th> komoditas </th>
	            <th> lama tanam </th>
	            <th> kapasitas /m<sup>2</sup></th>
	            <th></th>
			</tr>

	        <?php $nomor = 0; ?>
	        @foreach ($komoditas as $komoditas)

	        <?php $nomor++ ?> 
	        <tr>
	        	<th> {{$nomor}}</th>
	            <td> {{$komoditas->nama}}</td>
	            <td> {{$komoditas->waktu}} </td>
	            <td> {{$komoditas->kapasitas}} </td>
	            <td><a href="komoditas/edit/{{ $komoditas->id }}" class="btn btn-info btn-sm" role="button ">edit</a> 
	            <form action="/komoditas/{{$komoditas->id}}" method="POST">
	             {{ csrf_field() }}
	             {{ method_field('DELETE') }}
		            <button onclick="return confirm('Anda yakin akan menghapus?')" type="submit" class="btn btn-danger btn-sm">hapus</button>
	            </form>
	            </td>
	        </tr>
	        @endforeach
	</table>
	<a href="/komoditas/create" class="btn btn-info" role="button">Tambahkan +</a>
	
	</div>
      


	
@endsection
