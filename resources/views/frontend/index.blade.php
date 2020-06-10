@extends('frontend.layouts.master')
<?php $current_page = "index"; ?>
@section('title','FriendZone | Home')

@section('content')
@include('frontend.header')
@include('frontend.slider')
@include('frontend.welcome')

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 p-0">
                <img src="{{asset('user/images/offer-bg.jpg')}}" class="img-fluid my-height w-100" alt="responsive">
            </div>

            <div class="col-md-6 p-0 header-bg margin-bottom">
                <div class="p-5">
                    <h2 class="fz welcome-fz">Our Best Offers</h2>
                    <p class="cf-rs pt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima eius asperiores error &nbsp; &nbsp; ea libero, aut ab aliquid eos ex, tempore perferendis dolor incidunt, beatae veritatis cum fuga blanditiis impedit? Nobis.dolor incidunt, beatae veritatis cum fuga blanditiis impedit Nobis.Lorem ipsum dolor sitamet.</p>
                
                </div>
            </div>
        </div> 
     </div>
</section>

@include('frontend.media')
@include('frontend.menulist')
@include('frontend.testimonial')
@include('frontend.footer')
@endsection

