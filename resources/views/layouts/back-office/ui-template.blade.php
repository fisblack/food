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
<div class="jumbotron">
  <h1 class="display-4">BACK OFFICE UI KIT</h1>
  <p class="lead">This Template base on Bootstrap 4 and include font-awesome 5.0.9 free</p>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-12 col-sm-3">
      @include('layouts.back-office.ui-sidebar')
    </div>
    <div class="col-12 col-sm-9">
      <!-- Page Body -->
        @yield('body')
      <!-- End Page Body -->
    </div>
  </div>
</div>


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