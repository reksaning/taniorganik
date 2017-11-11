@extends('layouts.master')
@section('content')


<h1>Input Data Transaksi</h1>
  <hr>

  <form method="GET" action="/produksi">

  <div class="col-sm-6">

    <div class="form-group">
      <label for="title">Tanggal</label>
        <div class="input-group date " data-date="" data-date-format="yyyy-mm-dd">
              <input class="form-control" id="tanggal" type="text" name="tanggal" readonly="readonly" value="{{ request('tanggal') }}">
              <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
        </div>
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
            <td>{{ $produksi[$komoditas->id][$supplier->id] }}</td>
          @endforeach
        </tr>
      @endforeach

    </thead>

  </table>
  </form>
  @include('layouts.errors')


    <script src="/js/bootstrap-datepicker.js"></script>
  <script>
  $(".input-group.date").datepicker({autoclose: true, todayHighlight: true});
  </script>

  
@endsection