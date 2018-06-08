@extends('layouts.html5')

@section('global-head')
  <!-- Layout CSS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>

  <!-- Page CSS -->
  @yield('head')
@stop

@section('global-body')
  @include('layouts.auth.header')
  @include('layouts.auth.sidebar')

  <!-- Page Body -->
  @yield('body')
  <!-- End Page Body -->
  
  @include('layouts.auth.footer')
@endsection

@section('global-script')
  <!-- Layout JavaScript -->
  <script type="text/javascript">console.log('© ' + new Date().getFullYear() + ' - AdiwIT Co., Ltd. All rights reserved.');</script>

  <!-- Page JavaScript -->
  @yield('script')
@endsection