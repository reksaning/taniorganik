@extends('layouts.master')

@section('content')
<div class="panel panel-default">
    <div class="panel-body"><h2>Rekap Penjualan</h2></div>
</div>

{{-- Input (pemilihan komoditas) --}}
<div class="row">
    <div class="col-md-4 col">
    <div class="panel panel-default">
        <div class="panel-heading">Pengaturan<i class="fa fa-gear fa-fw"></i></div>
        <div class="panel-body">

            <form method="GET" action="/dashboard">
                <div class="form-group">
                    <label for="komoditas_id">Nama Sayuran</label>
                        <select class="form-control" id="komoditas_id" name="komoditas_id">
                            @foreach ($komoditases as $komoditas)
                                <option value="{{$komoditas->id}}">{{$komoditas->nama}}</option>
                            @endforeach
                        </select>
                </div>
                <div class="row"> 
                    <div class="form-group">
                        <button type="submit" class="btn btn btn-md">Proses</button>
                    </div>
                </div>
                
            </form>
        </div>
        </div>
    </div>

{{-- {{$bulanSales}} --}}
{{-- Grafik --}}

  <script type="text/javascript">

      $("#komoditas_id").val("{{ request('komoditas_id') }}");
  </script>  


<div class="col-md-8 col">
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Permintaan"
	},
	axisX:{
		title: "Periode Bulan",
		valueFormatString: "",
		crosshair: {
			enabled: true,
			snapToDataPoint: true
		}
	},
	axisY: {
		title: "Jumlah (pcs)",
		crosshair: {
			enabled: true
		}
	},
	toolTip:{
		shared:true
	},  
	legend:{
		cursor:"pointer",
		verticalAlign: "bottom",
		horizontalAlign: "left",
		dockInsidePlotArea: true,
		itemclick: toogleDataSeries
	},
	data: [
	@isset ($data)
		@foreach ($data as $key => $items)
				{
					type: "line",
					showInLegend: true,
					name: "{{ $key }}",
					markerType: "square",
					xValueFormatString: "",
					color: "{{ $colors[$loop->index] }}",
					dataPoints: [
			            @foreach ($items as $key => $element)
				
							{ label:  "{{ $key }}"  , y: {{ $element }}},

			            @endforeach	
					]
			},
		@endforeach
	@endisset
		
	]
});
chart.render();

function toogleDataSeries(e){
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	} else{
		e.dataSeries.visible = true;
	}
	chart.render();
}

}
</script>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="/js/jquery.canvasjs.min.js"></script>
</div>
@endsection