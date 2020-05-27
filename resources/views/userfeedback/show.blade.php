@extends('layouts.master')
@section('content')
 
<section id="main-content">
        <div class="row">
            <div class="col-md-12">
                <a href="{{url('/dashboard')}}" class="btn btn-primary mb-3 p-2">Click Here To Go Back</a>
                @if(session('status'))
                <p class="alert alert-success">
                    {{session('status')}}</p>
                @endif
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>User Name</th>
                            <th>User Email</th>
                            <th class="w-40">User Message</th>
                            <th> Time</th>
                            <th> Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usermessage as $mail)
                        <tr>
                            <th scope="row">{{$mail->id}}</th>
                            <td>{{$mail->username}}</td>
                            <td>{{$mail->useremail}}</td>
                            <td>{{$mail->usermessage}}</td>
                            <td>{{$mail->created_at->diffForHumans()}}</td>
                            <td>
                                <form action="{{URL::to('feedback/' . $mail->id)}}" method="post">
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
                    {{$usermessage->links()}}
                </div>
            </div>
        </div>
</section>


@endsection