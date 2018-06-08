@extends('example::layouts.e-commerce.template')

@section('head')
  <link rel="stylesheet" type="text/css" href="{{ asset('css/e-commerce/example.css') }}"/>
@stop

@section('body')
    <div class="container-fluid"></div>
@endsection

@section('script')
    <script src="{{ asset('js/e-commerce/example.js') }}"></script>
@endsection