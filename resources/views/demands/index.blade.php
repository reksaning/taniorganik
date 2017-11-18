@extends('layouts.master')
@section('content')

      
<h1>Input Data Permintaan</h1>
  <hr>


  <div class="col-sm-12">

    <div class="form-group">
      <label for="title">Tanggal</label>
      <form method="GET" action="/demand">
        <div class="input-group">
              <input class="form-control datepicker" data-provide="datepicker" data-date-format="yyyy-mm-dd" id="date" type="text" name="date" value="{{ request('date') }}">
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
          <th><a href="/demand/create?supplier_id={{$supplier->id}}&date={{ request('date') }}">{{$supplier->initial}}</a></th>
        @endforeach
      </tr>
      @foreach ($commodities as $commodity)
        <tr>
          <td>{{ $commodity->name }}</td>
          @foreach ($suppliers as $supplier)
            <td>{{ empty($demand[$commodity->id][$supplier->id]) ? 0 : $demand[$commodity->id][$supplier->id]  }}</td>
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