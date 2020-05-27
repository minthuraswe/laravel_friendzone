@extends('layouts.master')
@section('content')

<section id="main-content">
    <div class="row">

        <div class="col-md-4">
            <a href="{{url('/food')}}" class="btn btn-primary mb-3 p-2">Click Here To Go Back</a>
            <div class="card mt-0">
                <div class="card-header">
                    {{$food->foodname}}
                    <div class="pull-right text-primary">
                        {{$food->menu->menu_name}}</div>
                </div>
                <div class="card-body">
                    <img src="{{asset('/uploads/' . $food->foodimage)}}" class="img-fluid mt-2 mb-2">
                    <p class="card-text">{{$food->foodimage}}</p>
                    <div>Uploaded by {{Auth::user()->name}} <span
                            class="pull-right">{{$food->created_at->diffForHumans()}}</span></div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection