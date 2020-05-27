@extends('layouts.master')
@section('content')



<section id="main-content">
  <div class="row">
    <div class="col-md-12">
      <div class="d-flex">
       
        <div class="mr-auto">
          <a href="{{url('/dashboard')}}" class="btn btn-primary mb-3  p-2">Click Here To Go Back</a>
        </div>
      </div>

      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Image</th>
            <th>Ingredients</th>
            <th>Price</th>
          </tr>
        </thead>

        <tbody>

          @foreach ($food as $foods)
          <tr>
            <th scope="row">{{$foods->id}}</th>
            <td>{{$foods->foodname}}</td>
            <td>
              <img src="{{asset('/uploads/'. $foods->foodimage)}}" width="40px" height="40px" class="rounded">
              {{-- {{$foods->foodimage}} --}}
            </td>
            <td>{{$foods->foodingredient}}</td>
            <td class="text-danger">{{$foods->foodprice}} KS</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</section><br><br><br>


@endsection