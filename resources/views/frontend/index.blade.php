@extends('frontend.layouts.master')
<?php $current_page = "index"; ?>
@section('title','FriendZone | Home')

@section('content')
@include('frontend.header')
@include('frontend.slider')
@include('frontend.welcome')
@include('frontend.bestoffer')
@include('frontend.media')
@include('frontend.menulist')
@include('frontend.testimonial')
@include('frontend.footer')
@endsection

