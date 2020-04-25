@extends('layouts.master')
@section('content')
<section id="main-content">
    <div class="row">
        <div class="col-md-12">
            <a href="{{url('/menu')}}" class="btn btn-primary mb-3  p-2" >Click Here To Go Back</a>
            
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
                            <td>{{$item->updated_at}}</td>
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
              {{-- <div class="mt-4  mr-0 row float-right">
                {{$food->links()}}
              </div> --}}
              

        </div>
    </div>
</section><br><br><br>
@endsection