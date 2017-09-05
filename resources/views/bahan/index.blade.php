@extends('layouts.master')

@section('content')
<h1>Data Komoditas</h1>	

	<div>
	{{-- <h1>Rata tanam {{ \App\Komoditas::rataLamaTanam() }}</h1> --}}
	
	  <table class="table table-hover">
	        <tr>
	        	<th> No </th>
	            <th> Bahan Kemas </th>
	            <th> Harga </th>
	            <th></th>
			</tr>

	        <?php $nomor = 0; ?>
	        @foreach ($bahan as $bahan)

	        <?php $nomor++ ?> 
	        <tr>
	        	<th> {{$nomor}}</th>
	            <td> {{$bahan->nama}}</td>
	            <td> {{$bahan->harga}} </td>
	            <td><a href="bahan/edit/{{ $bahan->id }}" class="btn btn-info btn-sm" role="button ">edit</a>
	            <form action="/bahan/{{$bahan->id}}" method="POST">
	             {{ csrf_field() }}
	             {{ method_field('DELETE') }}
		            <button onclick="return confirm('Anda yakin akan menghapus?')" type="submit" class="btn btn-danger btn-sm">hapus</button>
	            </form>
	            </td>
	        </tr>
	        @endforeach
	</table>
	<a href="/bahan/create" class="btn btn-info" role="button">Tambahkan +</a>
	
	</div>
      


	
@endsection
