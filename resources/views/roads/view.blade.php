@extends('layouts.app')
@section('content')

<?php
	$images = explode("|",$feedback->filename);
?>
<div class="container">
<div class="row">
    <div class="col-sm-6">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('storage') }}/feedbacks/{{ $images[0] }}" class="d-block w-100" alt="...">
                </div>
                @for ($i = 1; $i < count($images); $i++)
                <div class="carousel-item">
                    <img src="{{ asset('storage') }}/feedbacks/{{ $images[$i] }}" class="d-block w-100" alt="...">
                </div>
                @endfor
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    <div class="col-sm-6">
        <h6>Feedback Area:- @if($feedback->feedarea == 'Other'){{$feedback->other}} @else {{$feedback->feedarea}} @endif</h6>
        <h6>Remark:- {{$feedback->remark}}</h6>
        <h5>Location Details</h5>
        <h6>State:- {{$feedback->state}}</h6>
        <h6>City:- {{$feedback->city}}</h6>
        <h6>Pincode:- {{$feedback->pincode}}</h6>
        <h6>Landmark:- {{$feedback->landmark}}</h6>
        <h6>Address:- {{$feedback->address}}</h6>
        
    </div>
    <p>@if($feedback->status == 'unsolved')This problem is further sent to Ministry of Road Transport and Highways. They will be solving the problem in 7 working days. @else This problem is successfully solved by Ministry of Road Transport and Highways .We appreciate Ministry of Road Transport and Highways efforts. We also thank {{App\User::find($feedback->userid)->name}} for their precious feedback @endif</p>
</div>
@endsection