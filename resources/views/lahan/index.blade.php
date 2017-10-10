@extends('layouts.master')

@section('content')
<h1>Informasi Tanam</h1> 

  <div>
  {{-- <h1>Rata tanam {{ \App\Komoditas::rataLamaTanam() }}</h1> --}}
  
    <table class="table table-hover">
          <tr>
            <th> No </th>
              <th> Nama Petani </th>
              <th> Komoditas </th>
              <th> Luas </th>
              <th></th>
      </tr>

          <?php $nomor = 0; ?>
          @foreach ($lahan as $lahan)

          <?php $nomor++ ?> 
          <tr>
            <th> {{$nomor}}</th>
              <td> {{$lahan->petani->nama}}</td>
              <td> {{$lahan->komoditas->nama}} </td>
              <td> {{$lahan->luas}} </td>
              <td><a href="lahan/edit/{{ $lahan->id }}" class="btn btn-info btn-sm" role="button ">edit</a>
              <form action="/lahan/{{$lahan->id}}" method="POST">
               {{ csrf_field() }}
               {{ method_field('DELETE') }}
                <button onclick="return confirm('Anda yakin akan menghapus?')" type="submit" class="btn btn-danger btn-sm">hapus</button>
              </form>
              </td>
          </tr>
          @endforeach
  </table>
  <a href="/lahan/create" class="btn btn-info" role="button">Tambahkan +</a>
  
  </div>
      


  
@endsection
