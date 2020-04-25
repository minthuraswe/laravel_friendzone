@extends('layouts.master')
@section('content')
<section id="main-content">
    <div class="row">
        <div class="col-md-12">
            <a href="{{url('/food')}}" class="btn btn-primary mb-3  p-2" >Click Here To Go Back</a>
    
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Ingredients</th>
                    <th>Price</th>
                    <th>Menu</th>
                    <th>Time</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
           
            <tbody>
                @foreach ($food as $foods)
                    <tr>
                        <th scope="row">{{$foods->id}}</th>
                        <td>{{$foods->foodname}}</td>
                        <td>
                        <img src="{{asset('/uploads/'. $foods->foodimage)}}" style="width:40px;height:40px;">
                        {{-- {{$foods->foodimage}} --}}
                        </td>
                        <td>{{$foods->foodingredient}}</td>
                        <td class="text-danger">{{$foods->foodprice}} KS</td>
                        <td><div class="badge badge-primary text-wrap" style="width: 6rem;">
                            {{$foods->menu->menu_name}}
                          </div>
                        </td>
                        <td>{{$foods->created_at}}</td>
                        <td>
                            <a href="{{ URL::to('food/' . $foods->id . '/edit') }}" class="btn btn-primary p-2" title="edit"><img src="{{asset('images/edit.png')}}"></a>
                            <a href="{{ URL::to('food/' . $foods->id) }}" class="btn btn-warning p-2" title="View"><img src="{{asset('images/view.png')}}"></a>
                            <form action="{{ URL::to('food/' . $foods->id ) }}" method="post" style="display: inline;">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger p-2" title="delete"><img src="{{asset('images/delete.png')}}"></button>
                            </form>
                        </td>
                    </tr>   
                @endforeach
            </tbody>
        </table>
         
              {{-- <div class="mt-4  mr-0 row float-right">
                {{$food->links()}}
              </div> --}}
              

        </div>
    </div>
</section><br><br><br>
@endsection