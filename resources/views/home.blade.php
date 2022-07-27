@extends('layouts.app')
@section('content')
  <header class="w3-container w3-xlarge">
    <p class="w3-left">Jeans</p>
    <p class="w3-right">
      <i class="fa fa-search"></i>
    </p>
  </header>
  <div class="w3-container w3-text-grey" id="jeans">
    <p>8 items</p>
  </div>
  <div class="w3-row w3-grayscale">
  	<!-- Product Start -->
    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="./image.jpg" style="width:100%">
        </div>
        <p>Mega Ripped Jeans<br><b>$19.99</b></p>
      </div>
    </div>
    <!-- Product End -->
  </div>   
  @endsection