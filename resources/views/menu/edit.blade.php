@extends('layouts.master')
@section('content')
<section id="main-content">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header mb-2">Editing Menu Form</div>
                <div class="card-body">
                    <form action="{{url('menu/' . $data->id )}}" method="post">
                        @method('PUT')
                        @csrf
                        {{-- @foreach ($errors->all() as $error)
                            <p class="alert alert-danger mt-2">{{$error}}</p>
                        @endforeach --}}
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Enter Menu Name</label>
                            <div class="col-md-6">
                                <input id="email" class="form-control border" type="text" name="name"
                                    value="{{$data->menu_name}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4"></div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary" name="submit">Update</button>
                                <a href="{{url('/menu')}}" class="btn btn-danger p-2">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection