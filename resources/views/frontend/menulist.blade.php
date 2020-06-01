<section style="background-color:#131313">
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-md-12 text-center">
                {{-- <img src="images/fork-plate-and-knife.png"> --}}
                <h2 class="fz welcome-fz">Discover Our Menu</h2>
                {{-- <p class="we-to-fz mt-4" style="font-family:'Lucida Sans';">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum itaque molestias dicta, sequi illo facere sint, odit quas optio inventore tenetur quia aut culpa error, nostrum ex veniam porro autem?
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat iure accusantium quidem culpa error tempora.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo, eaque facere ducimus deleniti ab sunt totam dolorem eius. 
                </p> --}}
            </div>
        </div>
        <div class="row mt-5">
          
          @foreach ($food as $item)
          <div class="col-md-6 mb-4">
            <div class="card-deck">
              <div class="card" style="border:1px solid #787878">
              {{-- <div class="img-hover-zoom"><img src="{{asset('/uploads/' . $item->foodimage)}}" 
              class="card-img-top w-100 " alt="..." style="max-height: 262px;"></div> --}}
                <div class="card-body header-bg">
                  <h5 class="card-title fz">{{$item->foodname}}
                    <span class="text-warning float-right">{{$item->foodprice}} KS</span></h5>
                    {{-- <div class="badge badge-mine text-wrap float-right" style="width: 6rem;">
                      {{$item->menu->menu_name}}
                    </div>--}}
                  <p class="card-text sec-header" style="font-size:1.1rem;">{{$item->foodingredient}}</p>
                 
                  {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                </div>
              </div>
            </div>
          </div>
            @endforeach
          </div>
        
            <div class="row text-center mt-4">
                <div class="col-md-12">
                  <button class="btn btn-warning text-in-btn"> <a href="{{url('/menus')}}">View Full Menu</a></button> 
                </div>
            </div>
    </div>
</section>