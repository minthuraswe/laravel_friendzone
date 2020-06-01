@extends('layouts.master')
@section('content')



<section id="main-content">
  <div class="row">
    <div class="col-md-12">
      <div class="d-flex">
        <h2>Food</h2>
        <form action="{{url('/searchfood')}}" method="get" class="form-inline my-2 my-lg-0">
          <input class="mr-sm-2 ml-sm-2 mb-3" type="search" placeholder="Search" name="search">
          <button class=" mb-3" type="submit">Search</button>
        </form>
        <div class="ml-auto">
          <a href="{{url('/food/create')}}" class="btn btn-primary mb-3  p-2">
            <img src="{{asset('user/images/plus.png')}}" class="mb-1"> Add New One</a>
          <a href="{{url('/admin')}}" class="btn btn-outline-primary mb-3 p-2">Back</a>
        </div>
      </div>



      @if (session('message'))
      <p class="alert alert-success">{{session('message')}}</p>
      @endif
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Image</th>
            <th>Ingredients</th>
            <th>Price</th>
            <th>Menu</th>
            <th>Date/Time</th>
            <th>Action</th>
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
            <td width="40%">{{$foods->foodingredient}}</td>
            <td class="text-danger">{{$foods->foodprice}} KS</td>
            <td>
              <div class="badge badge-primary text-wrap" style="width: 6rem;">
                {{$foods->menu->menu_name}}
              </div>
            </td>
            <td>{{$foods->updated_at->diffforHumans()}}</td>
            <td>
              <a href="{{ URL::to('food/' . $foods->id . '/edit') }}" class="btn btn-primary p-2" title="edit"><img
                  src="{{asset('images/edit.png')}}"></a>
              <a href="{{ URL::to('food/' . $foods->id) }}" class="btn btn-warning p-2" title="View"><img
                  src="{{asset('images/view.png')}}"></a>
              <form action="{{ URL::to('food/' . $foods->id ) }}" method="post" style="display: inline;">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger p-2" title="delete"><img
                    src="{{asset('images/delete.png')}}"></button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="mt-4  ml-0 row ">
        {{$food->links()}}
      </div>


    </div>
  </div>
</section><br><br><br>


@endsection