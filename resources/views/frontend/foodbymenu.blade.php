@extends('frontend.master')
@include('frontend.header')
@section('title', 'FriendZone | Menu')
@section('content')
@include('frontend.secheader_menu')

<section style="background-color:#000000;">
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-md-12 text-center">
                {{-- <img src="images/fork-plate-and-knife.png"> --}}
                <h2 class="fz welcome-fz">Discover Our Menu</h2>
                  <h5 class="fz mt-5"> 
                    @foreach ($data as $item)
                     <a href="{{ URL::to('food-by/menu-' . $item->id) }}">
                      <span class="pl-5"> {{$item->menu_name}} </span>
                     </a>
                    @endforeach
                  </h5>
                
                {{-- <p class="we-to-fz mt-4" style="font-family:'Lucida Sans';">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum itaque molestias dicta, sequi illo facere sint, odit quas optio inventore tenetur quia aut culpa error, nostrum ex veniam porro autem?
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat iure accusantium quidem culpa error tempora.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo, eaque facere ducimus deleniti ab sunt totam dolorem eius. 
                </p> --}}
            </div>
        </div>
        <div class="row mt-5">
            @foreach ($food as $foods)
            <div class="col-md-4 mb-4">
                <div class="card-deck">
                  <div class="card"  style="border:1px solid #787878">
                  <div class="img-hover-zoom"><img src="{{asset('/uploads/' . $foods->foodimage)}}" 
                  class="card-img-top w-100 " alt="..." style="max-height: 262px;"></div>
                    <div class="card-body header-bg">
                      <h5 class="card-title text-light">{{$foods->foodname}}</h5>
                        {{-- <div class="badge badge-mine text-wrap float-right" style="width: 6rem;">
                          {{$item->menu->menu_name}}
                        </div></h5> --}}
                      <p class="card-text sec-header text-truncate" style="font-size:1.1rem;">{{$foods->foodingredient}}</p>
                      <span class="text-warning">{{$foods->foodprice}} KS</span>
                      {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                    </div>
                  </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@include('frontend.clientfeedback')
@include('frontend.footer')
@endsection