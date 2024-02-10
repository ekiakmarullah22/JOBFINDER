@extends('Template.masterDashboard')

@section('namaHalaman')
<h1>{{ $namaHalaman }}</h1>
@endsection

@section('content')
<h1>{{ $chart1->options['chart_title'] }}</h1>
{!! $chart1->renderHtml() !!}
@endsection

@push('script')
{!! $chart1->renderChartJsLibrary() !!}
{!! $chart1->renderJs() !!}
@endpush