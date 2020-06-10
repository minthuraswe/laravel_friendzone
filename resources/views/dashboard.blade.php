@extends('layouts.master')
@section('content')
            <!-- /# row -->
            <section id="main-content">
               
                   
               
                <div class="row">
                    {{-- @if (session('success'))
                    <div class="" >
                      {{session('success')}}
                     
                    </div>
                    @endif --}}
                    @if (session('success'))
                    <div class="col-lg-12 " >
                        <div class="breadcrumb mb-0 alert alert-success alert-dismissible fade show" role="alert">
                           {{session('success')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    @endif
                    {{-- @if (session('message'))
                    <div class="col-lg-12 title-margin-right  ">
                        <ol class="breadcrumb mb-0 alert alert-success">
                            <span>{{session('message')}}</span>
                        </ol>
                    </div>
                    @endif --}}
                    <div class="col-lg-4">
                        <a href="{{url('/food')}}"><div class="card mt-0">
                            
                            <div class="stat-widget-two">
                                <div class="stat-content">
                                    <div class="stat-text">Food</div>
                                    <div class="stat-digit pt-3 pb-3"> 
                                        <button type="button" class="btn btn-warning">
                                            items <span class="badge badge-light text-primary">{{$countForfood}}</span>
                                        </button>
                                    </div>
                                </div>
                                
                            </div>
                         
                            
                        </div>
                        </a>
                    </div>
                
                  
                    <div class="col-lg-4">
                        <a href="{{url('/menu')}}"><div class="card mt-0">
                            <div class="stat-widget-two">
                                <div class="stat-content">
                                    <div class="stat-text">Menu</div>
                                    <div class="stat-digit pt-3 pb-3">
                                        <button type="button" class="btn btn-warning">
                                            items <span class="badge badge-light text-primary">{{$countFormenu}}</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="{{url('/feedback')}}">
                        <div class="card mt-0">
                            <div class="stat-widget-two">
                                <div class="stat-content">
                                    <div class="stat-text">Customer Feedback</div>
                                    <div class="stat-digit pt-3 pb-3">
                                        <button type="button" class="btn btn-warning">
                                        items <span class="badge badge-light text-primary">{{$countFormessage}}</span>
                                        </button>
                                    </div>                                        
                                </div>
                            </div>
                        </div>
                        </a>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->

                
                <div class="row">
                   <div class="col-lg-8 p-2">
                       <div class="row">
                         
                        <div class="col-lg-12 title-margin-right  ">
                            <ol class="breadcrumb mb-0">
                               <div>Your Food List</div>
                            </ol>
                        </div>
                    
                    
                    @foreach ($food as $food)
                        
                    <div class="col-lg-6">
                        <div class="card mt-0">
                            <div class="card-header">
                                {{$food->foodname}}
                                 <div class="pull-right text-primary"> 
                                    {{$food->menu->menu_name}}</div>
                            </div> 
                        <div class="card-body">
                            <img src="{{asset('/uploads/' . $food->foodimage)}}" class="w-100 mt-2 mb-2" style="max-height:200px;">
                                <p class="card-text">{{$food->foodimage}}</p>
                            <div>Uploaded by
                                <?php $user = App\User::find($food->user_id) ?>
                                {{$user->name}}
                        
                            <span class="pull-right">{{$food->created_at->diffForHumans()}}</span></div>
                        </div>
                    </div>
                    </div>  
                    @endforeach
                      
                </div>
                    </div>

                    <div class="col-lg-4 p-2">
                        <div class="row">
                        <div class="col-lg-12 title-margin-right  ">
                            <ol class="breadcrumb mb-0">
                               <div>Your Menu List</div>
                            </ol>
                        </div>

                        <div class="col-lg-12">
                            <ul>
                                @foreach ($data as $item)
                                    <li class="pb-2" style="font-size:1rem;
                                            list-style-type:square;
                                            list-style-position:inside;">
                                        <a href="{{ URL::to('food-by-menu/' . $item->id) }}">{{$item->menu_name}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                    </div>
                </div>
            
            </section>
  

@endsection