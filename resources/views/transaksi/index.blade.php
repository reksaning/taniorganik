@extends('layouts.master')

@section('content')
<h1>Rekap Transaksi</h1> 

  <div>
  {{-- <h1>Rata tanam {{ \App\Komoditas::rataLamaTanam() }}</h1> --}}
  
    <table class="table table-hover">
          <tr>
            <th> No </th>
              <th> tanggal </th>
              <th> komoditas_id </th>
              <th> jumlah terjual </th>
              <th></th>
      </tr>

          <?php $nomor = 0; ?>
          @foreach ($transaksi as $transaksi)

          <?php $nomor++ ?> 
          <tr>
            <th> {{$nomor}}</th>
              <td> {{$transaksi->tanggal}}</td>
              <td> {{$transaksi->komoditas_id}} </td>
              <td> {{$transaksi->jumlah}} </td>
              <td><a href="transaksi/edit/{{ $transaksi->id }}" class="btn btn-info btn-sm" role="button ">edit</a>
              <form action="/transaksi/{{$transaksi->id}}" method="POST">
               {{ csrf_field() }}
               {{ method_field('DELETE') }}
                <button onclick="return confirm('Anda yakin akan menghapus?')" type="submit" class="btn btn-danger btn-sm">hapus</button>
              </form>
              </td>
          </tr>
          @endforeach
  </table>
  <a href="/transaksi/create" class="btn btn-info" role="button">Tambahkan +</a>
  
  </div>
      


  
@endsection
