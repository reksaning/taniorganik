@extends('layouts.master')

@section('content')
<div class="panel panel-default">
    <div class="panel-body"><h2>Peramalan Permintaan Pasar</h2></div>
</div>


<div class="form-group">

    <label for="komoditas_id">Nama Sayuran</label>
    
    <select class="form-control" id="komoditas_id" name="komoditas_id">
        @foreach ($komoditases as $komoditas)
            <option value="{{$komoditas->id}}">{{$komoditas->nama}}</option>
        @endforeach
    </select>
</div> 


<div>
    <table class="table table-hover">
        <tr>
          <th> No </th>
            <th> tanggal </th>
            <th> komoditas </th>
            <th> jumlah terjual </th>
            <th></th>
        </tr>
    </table>
</div>
      


  
@endsection
