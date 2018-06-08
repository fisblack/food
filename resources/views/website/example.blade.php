@extends('layouts.website.template')

@section('head')
  <link rel="stylesheet" type="text/css" href="{{ asset('css/website/example.css') }}"/>
@stop

@section('body')
    <div class="container-fluid"></div>
@endsection

@section('script')
    <script src="{{ asset('js/website/example.js') }}"></script>
@endsection