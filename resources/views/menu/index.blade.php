@extends('layouts.master')
@section('content')
<section id="main-content">
    <div class="row">
        <div class="col-md-12">
            <a href="{{url('/menu/create')}}" class="btn btn-primary mb-3  p-2" >Create New One Here</a>
            <a href="{{url('/dashboard')}}" class="btn btn-primary mb-3 p-2">Click Here To Go Back</a>
            <form action="{{url('/searchmenu')}}" method="get" class="form-inline my-2 my-lg-0 pull-right">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
              </form>
              @if (session('message'))
              <p class="alert alert-success">{{session('message')}}</p>
              @endif
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Time</th>
                    <th class="text-right">Action</th>
                  </tr>
                </thead>

                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td>{{$item->menu_name}}</td>
                            <td>
                             {{$item->created_at->diffforHumans()}}
                            </td>
                            <td>
                                <a href="{{ URL::to('menu/' . $item->id . '/edit') }}" class="btn btn-primary p-2" title="edit"><img src="{{asset('images/edit.png')}}"></a>
                                <form action="{{ URL::to('menu/' . $item->id ) }}" method="post" style="display: inline;">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger p-2" title="delete"><img src="{{asset('images/delete.png')}}"></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
               </tbody>
              </table>
              <div class="mt-4  mr-0 row float-right">
                {{$data->links()}}
              </div>
              

        </div>
    </div>
</section><br><br><br>
@endsection