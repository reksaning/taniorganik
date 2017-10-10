@extends('layouts.master')

@section('content')
<h1>Data Petani</h1>	

	<div>
	{{-- <h1>Rata tanam {{ \App\petani::rataLamaTanam() }}</h1> --}}
	
	  <table class="table table-hover">
	        <tr>
	        	<th> No </th>
	            <th> Nama Petani </th>
	            <th> Alamat </th>
	            <th> Luas Lahan (m<sup>2</sup>)</th>
	            <th></th>
			</tr>

	        <?php $nomor = 0; ?>
	        @foreach ($petani as $petani)

	        <?php $nomor++ ?> 
	        <tr>
	        	<th> {{$nomor}}</th>
	            <td> {{$petani->nama}}</td>
	            <td> {{$petani->alamat}} </td>
	            <td> {{$petani->luas}} </td>
	            <td><a href="petani/edit/{{ $petani->id }}" class="btn btn-info btn-sm" role="button ">edit</a> 
	            <form action="/petani/{{$petani->id}}" method="POST">
	             {{ csrf_field() }}
	             {{ method_field('DELETE') }}
		            <button onclick="return confirm('Anda yakin akan menghapus?')" type="submit" class="btn btn-danger btn-sm">hapus</button>
	            </form>
	            </td>
	        </tr>
	        @endforeach
	</table>
	<a href="/petani/create" class="btn btn-info" role="button">Tambahkan +</a>
	
	</div>
      


	
@endsection
