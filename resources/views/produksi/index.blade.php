@extends('layouts.master')

@section('content')
<h1>Rekap Produksi</h1> 

  <div>
  {{-- <h1>Rata tanam {{ \App\Komoditas::rataLamaTanam() }}</h1> --}}
  
    <table class="table table-hover">
          <tr>
            <th> No </th>
              <th> tanggal </th>
              <th> komoditas_id </th>
              <th> jumlah produksi </th>
              <th></th>
      </tr>

          <?php $nomor = 0; ?>
          @foreach ($produksi as $produksi)

          <?php $nomor++ ?> 
          <tr>
            <th> {{$nomor}}</th>
              <td> {{$produksi->tanggal}}</td>
              <td> {{$produksi->komoditas_id}} </td>
              <td> {{$produksi->jumlah}} </td>
              <td><a href="transaksi/edit/{{ $produksi->id }}" class="btn btn-info btn-sm" role="button ">edit</a>
              <form action="/transaksi/{{$produksi->id}}" method="POST">
               {{ csrf_field() }}
               {{ method_field('DELETE') }}
                <button onclick="return confirm('Anda yakin akan menghapus?')" type="submit" class="btn btn-danger btn-sm">hapus</button>
              </form>
              </td>
          </tr>
          @endforeach
  </table>
  <a href="/produksi/create" class="btn btn-info" role="button">Tambahkan +</a>
  
  </div>
      


  
@endsection
