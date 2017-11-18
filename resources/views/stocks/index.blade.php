@extends('layouts.master')

@section('content')
<h1>Persediaan Bahan Kemas</h1> 

  <div>
  {{-- <h1>Rata tanam {{ \App\Komoditas::rataLamaTanam() }}</h1> --}}
  
    <table class="table table-hover">
          <tr>
            <th> No </th>
            <th> Tanggal </th>
            <th> Bahan kemas </th>
            <th> Jumlah (pcs) </th>
            <th></th>
      </tr>

          <?php $nomor = 0; ?>
          @foreach ($stocks as $stock)

          <?php $nomor++ ?> 
          <tr>
            <th> {{$nomor}}</th>
              <td> {{$stock->date}}</td>
              <td> {{$stock->packaging->name}} </td>
              <td> {{$stock->quantity}} </td>
              <td><a href="stock/edit/{{ $stock->id }}" class="btn btn-info btn-sm" role="button ">edit</a>
              <form action="/stock/{{$stock->id}}" method="POST">
               {{ csrf_field() }}
               {{ method_field('DELETE') }}
                <button onclick="return confirm('Anda yakin akan menghapus?')" type="submit" class="btn btn-danger btn-sm">hapus</button>
              </form>
              </td>
          </tr>
          @endforeach
  </table>
  <a href="/stock/create" class="btn btn-info" role="button">Tambahkan +</a>
  
  </div>
      


  
@endsection
