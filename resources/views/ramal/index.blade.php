@extends('layouts.master')

@section('content')
<div class="panel panel-default">
    <div class="panel-body"><h2>Peramalan Permintaan Pasar</h2></div>
</div>

<div class="row">
    <div class="col-md-4 col">
    <div class="panel panel-default">
        <div class="panel-heading">Pengaturan<i class="fa fa-gear fa-fw"></i></div>
        <div class="panel-body">

            <form method="GET" action="/peramalan">
                <div class="form-group">
                    <label for="komoditas_id">Nama Sayuran</label>
                        <select class="form-control" id="komoditas_id" name="komoditas_id">
                            @foreach ($komoditases as $komoditas)
                                <option value="{{$komoditas->id}}">{{$komoditas->nama}}</option>
                            @endforeach
                        </select>
                </div>
{{--                 <div class="form-group">
                    <label for="pusat_id">Supplier</label>
                        <select class="form-control" id="pusat_id" name="pusat_id">
                            @foreach ($induks as $index => $item)
                                <option value="{{ $index }}">{{ $item }}</option>
                            @endforeach
                        </select>
                </div> --}}
{{--                 <div class="form-group">
                    <label for="periode">Periode (bulan)</label>
                        <select class="form-control" id="periode" name="periode">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>12</option>
                        </select>
                </div>   --}}

                <div class="row"> 
                    <div class="form-group">
                        <button type="submit" class="btn btn btn-md">Proses</button>
                    </div>
                </div>
                
            </form>
        </div>
        </div>
    </div>

    <div class="col-md-8 col">
        {{-- @if (!empty($method))
            <h1>{{ $method }}</h1>
        @endif --}}
        <table class="table table-hover">
            <thead>
                <tr>
                    <th> Bulan </th>
                    @foreach ($induks as $induk)
                        <th>{{ $induk }}</th>
                    @endforeach
                    <th class="text-primary"><strong>Jumlah</strong></th>
                </tr>
            </thead>
            <tbody>
            
                @if ($forecasts != null)
                    @foreach ($monthly as $datas)
                        <tr>
                            <td>{{ $lastMonth->addMonths(1)->format('F Y')}}</td>
                            @foreach ($datas as $data)
                                <td>{{ round($data) }}</td>
                            @endforeach
                            <td class="text-primary">{{ round(array_sum($datas)) }}</td>
                        </tr>
                    @endforeach
                @endif

{{--         @if (!empty($kebutuhan))
            <h1>{{ $kebutuhan }}</h1>
        @endif --}}

            </tbody>
        </table>
    </div>
  </div>
  <script type="text/javascript">
      $("#periode").val("{{ request('periode') }}");
      $("#komoditas_id").val("{{ request('komoditas_id') }}");
  </script>  
@endsection
