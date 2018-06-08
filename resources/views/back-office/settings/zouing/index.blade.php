@extends('layouts.back-office.template')

@section('head')
	  <link rel="stylesheet" type="text/css" href="{{ asset('css/back-office/settings/example/show.css') }}"/>
@endsection

@section('body')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">zouing index</div>

                <div class="card-body">
<a href="zouing/create" class="btn btn-primary" type="button">zouing create</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/settings/example/show.js') }}"></script>
@endsection
