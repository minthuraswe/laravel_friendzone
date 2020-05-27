@extends('frontend.layouts.master')
<?php $current_page = "gallery"; ?>
@section('title', 'FriendZone | Gallery')

@section('content')
@include('frontend.header')

     <section style="background-color:#131313;">
        <div class="container pt-5 pb-5">           
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="fz welcome-fz" style="padding-bottom:2rem;">Our Delicious Food</h2>
                </div>
                
                @foreach ($food as $foods)
                <div class="col-md-3">
                    <div class="card  mb-4 " style="border:none;">
                        <div class="img-hover-zoom ">
                    <img src="{{asset('/uploads/' . $foods->foodimage)}}" class="img-fluid w-100 " style="max-height:184px;border:1px solid #787878;">
                </div></div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@include('frontend.footer')
@endsection
