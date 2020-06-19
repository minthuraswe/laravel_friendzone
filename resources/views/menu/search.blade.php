@extends('layouts.master')
@section('content')
<section id="main-content">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex">
                <h2>Menu</h2>
                <form action="{{url('/searchmenu')}}" method="get" class="form-inline my-2 my-lg-0">
                    <input class="mr-sm-2 ml-sm-2 mb-3" type="search" placeholder="Search" name="search">
                    <button class=" mb-3" type="submit">Search</button>
                </form>
                <div class="ml-auto">
                    <a href="{{url('/menu')}}" class="btn btn-primary mb-3  p-2" >Back</a>
                </div>
            </div>

            @if(isset($search))
            <div>
                <b> {{$search_count}} </b> 
                    @if($search_count < 2)
                        result
                    @else
                        results
                    @endif
                    for "{{$search}}"
            </div>
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
                    @foreach ($searchmenu as $item)
                        <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td>{{$item->menu_name}}</td>
                            <td>{{$item->created_at->diffforHumans()}}</td>
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
            @else
                <span class="font-weight-bold">{{$error}}</span>
            @endif
        </div>
    </div>
</section><br><br><br>
@endsection