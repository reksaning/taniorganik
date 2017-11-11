@extends('layouts.master')
@section('content')

      
<h1>Input Data Transaksi</h1>
  <hr>


  <div class="col-sm-12">

    <div class="form-group">
      <label for="title">Tanggal</label>
      <form method="GET" action="/produksi">
        <div class="input-group">
              <input class="form-control datepicker" data-provide="datepicker" data-date-format="yyyy-mm-dd" id="tanggal" type="text" name="tanggal" value="{{ request('tanggal') }}">
                  <div class="input-group-btn">
                      <button class="btn btn-success" type="submit">Go</button>
                  </div>
            
        </div>
        </form>
    </div>


  <table class="table">
    <thead>
      <tr>
        <th> Nama Komoditas </th>
        @foreach ($suppliers as $supplier)
          <th><a href="/produksi/create?supplier_id={{$supplier->id}}&tanggal={{ request('tanggal') }}">{{$supplier->name}}</a></th>
        @endforeach
      </tr>
      @foreach ($komoditases as $komoditas)
        <tr>
          <td>{{ $komoditas->nama }}</td>
          @foreach ($suppliers as $supplier)
            <td>{{ empty($produksi[$komoditas->id][$supplier->id]) ? 0 : $produksi[$komoditas->id][$supplier->id]  }}</td>
          @endforeach
        </tr>
      @endforeach

    </thead>

  </table>
  @include('layouts.errors')


    <script src="/js/bootstrap-datepicker.js"></script>
  <script>
  $(".datepicker").datepicker({autoclose: true, todayHighlight: true});
  </script>

  
@endsection