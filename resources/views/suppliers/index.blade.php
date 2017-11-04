@extends('layouts.master')

@section('content')
<h1>Data Supplier</h1>	

	<div>
	{{-- <h1>Rata tanam {{ \App\Komoditas::rataLamaTanam() }}</h1> --}}
	
	  <table class="table table-hover">
	        <tr>
	        	<th> No </th>
	            <th> Supplier </th>
	            <th> Alamat </th>
	            <th></th>
			</tr>

	        <?php $nomor = 0; ?>
	        @foreach ($supplier as $supplier)

	        <?php $nomor++ ?> 
	        <tr>
	        	<th> {{$nomor}}</th>
	            <td> {{$supplier->name}}</td>
	            <td> {{$supplier->alamat}} </td>

	            <td>
	            <a href="supplier/edit/{{ $supplier->id }}" class="btn btn-info btn-sm" role="button ">edit</a>

	            <form action="/supplier/{{$supplier->id}}" method="POST">
	             {{ csrf_field() }}
	             {{ method_field('DELETE') }}
		            <button onclick="return confirm('Anda yakin akan menghapus?')" type="submit" class="btn btn-danger btn-sm">hapus</button>
	            </form>


	            </td>
	        </tr>
	        @endforeach
	</table>
	<a href="/supplier/create" class="btn btn-info" role="button">Tambahkan +</a>
	
	</div>
      


	
@endsection
