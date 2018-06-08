@extends('layouts.html5')

@section('global-head')
  {{-- vendor css --}}
  <link rel="stylesheet" href="{{ asset('vendors/sweetalert2/sweetalert2.min.css') }}">
  <!-- Layout CSS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/back-office/theme/app.css') }}"/>
  <!-- Page CSS -->
  @yield('head')
@stop

@section('global-body')
  <head>
    @include('layouts.back-office.header')
  </head>
  @include('layouts.back-office.sidebar')
<main class="py-4">
  <!-- Page Body -->
  @yield('body')
  <!-- End Page Body -->
</main>
  @include('layouts.back-office.footer')
@endsection

@section('global-script')
  <!-- Layout JavaScript -->
  <script src="{{ asset('vendors/jquery.min.js') }}"></script>
  <script src="{{ asset('vendors/popper.min.js') }}"></script>
  <script src="{{ asset('vendors/bootstrap.min.js') }}"></script>
  <script src="{{ asset('vendors/typeahead/typeahead.js') }}"></script>
  <script src="{{ asset('vendors/sweetalert2/sweetalert2.min.js') }}"></script>
  <script src="{{ asset('js/back-office/script.js') }}"></script>
  <!-- Page JavaScript -->
  @yield('script')
@endsection