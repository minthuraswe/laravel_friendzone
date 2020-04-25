@extends('layouts.master')
@section('content')



<section id="main-content">
    <div class="row">
        <div class="col-md-12">
            <a href="{{url('/dashboard')}}" class="btn btn-primary mb-3  p-2" >Click Here To Go Back</a>
          
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
                            <img src="{{asset('/uploads/'. $foods->foodimage)}}" style="width:40px;height:40px;">
                            {{-- {{$foods->foodimage}} --}}
                            </td>
                            <td>{{$foods->foodingredient}}</td>
                            <td class="text-danger">{{$foods->foodprice}} KS</td>
                        </tr>
                    @endforeach
               </tbody>
              </table>
             
              <div class="mt-4  mr-0 row float-right">
                {{$food->links()}}
              </div> 
              

        </div>
    </div>
</section><br><br><br>


@endsection