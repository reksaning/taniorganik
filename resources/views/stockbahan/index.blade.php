@extends('layouts.master')

@section('content')
<h1>Rekap Transaksi</h1> 

  <div>
  {{-- <h1>Rata tanam {{ \App\Komoditas::rataLamaTanam() }}</h1> --}}
  
    <table class="table table-hover">
          <tr>
            <th> No </th>
              <th> tanggal </th>
              <th> bahan kemas </th>
              <th> jumlah </th>
              <th></th>
      </tr>

          <?php $nomor = 0; ?>
          @foreach ($stockbahan as $stockbahan)

          <?php $nomor++ ?> 
          <tr>
            <th> {{$nomor}}</th>
              <td> {{$stockbahan->tanggal}}</td>
              <td> {{$stockbahan->bahan->nama}} </td>
              <td> {{$stockbahan->jumlah}} </td>
              <td><a href="stockbahan/edit/{{ $stockbahan->id }}" class="btn btn-info btn-sm" role="button ">edit</a>
              <form action="/stockbahan/{{$stockbahan->id}}" method="POST">
               {{ csrf_field() }}
               {{ method_field('DELETE') }}
                <button onclick="return confirm('Anda yakin akan menghapus?')" type="submit" class="btn btn-danger btn-sm">hapus</button>
              </form>
              </td>
          </tr>
          @endforeach
  </table>
  <a href="/stockbahan/create" class="btn btn-info" role="button">Tambahkan +</a>
  
  </div>
      


  
@endsection
