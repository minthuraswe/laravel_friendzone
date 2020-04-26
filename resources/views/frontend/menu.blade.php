@extends('frontend.master')
<?php  $current_page = 'menu'; ?>
@include('frontend.header')
@section('title', 'FriendZone | Menu')
@section('content')
{{-- @include('frontend.secheader_menu') --}}

<section style="background-color:#131313;">
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-md-12 text-center">
                {{-- <img src="images/fork-plate-and-knife.png"> --}}
                <h2 class="fz welcome-fz" style="padding-bottom:2rem;">Discover Our Menu</h2>
                <div class="row">
                  <div class="col-md-3 d-none d-sm-block">
                    <h5>
                    <ul class="list-unstyled">
                        <a href="{{url('/menus')}}" class="text-light">
                          <li class="pt-2 pb-2  mb-3" style="background-color:#000;border:1px solid #787878;"> 
                            All
                          </li> 
                        </a>
                          @foreach ($data as $item)
                            <a href="{{URL::to('food-by/menu-' . $item->id)}}" >
                              <li class="pt-2 pb-2  mb-3" style="background-color:#000;border:1px solid #787878;">
                                {{$item->menu_name}}
                              </li>
                            </a>
                          @endforeach
                    </ul>
                    </h5>
                  </div>
                  <div class="col-md-9">
                    <div class="row text-left">
                      @foreach ($food as $item)
                      <div class="col-md-6  mb-4">
                          <div class="card-deck">
                            <div class="card"  style="border:1px solid #787878">
                            {{-- <div class="img-hover-zoom"><img src="{{asset('/uploads/' . $item->foodimage)}}" 
                            class="card-img-top w-100 " alt="..." style="max-height: 155px;"></div> --}}
                              <div class="card-body header-bg">
                                <h5 class="card-title fz">{{$item->foodname}}
                                  <span class="text-warning float-right">{{$item->foodprice}} KS</span>
                                 </h5>
                                <p class="card-text sec-header text-truncate" style="font-size:1.1rem;">{{$item->foodingredient}}</p>
                              </div>
                            </div>
                          </div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        
</section>

{{-- @include('frontend.clientfeedback') --}}
@include('frontend.footer')
@endsection
