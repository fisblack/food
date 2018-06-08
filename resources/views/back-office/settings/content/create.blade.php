@extends('layouts.back-office.template')

@section('head')
	
@endsection

@section('body')
<style>
.bk-container{
    padding-left: 290px;
    padding-right: 55px;
}

</style>
<div class="bk-container">
    <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
  
  </div>
</div>
@endsection

@section('script')
    
@endsection



