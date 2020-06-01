@extends('layouts.master')
@section('content')

<section id="main-content">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header mb-2">Editing Image Form</div>
                <div class="card-body">
                    <form action="{{url('image/' . $food->id )}}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                
                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">Enter Food Image</label>
                            <div class="col-md-6">
                                <input type="file" name="image" class="border form-control">
                                @if ($errors->has('image'))
                                <span class="text-danger">
                                    <sm>{{ $errors->first('image') }}</sm>
                                </span><br>
                                @endif
                                <img src="{{asset('/uploads/'. $food->foodimage)}}" class="mt-2 img-thumbnail"
                                    width="100" />
                                
                            </div>
                        </div>

                        <div class="form-gruop row mb-0">
                            <div class="col-md-4"></div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary"> Update </button>
                                <a href="{{url('/food')}}" class="btn btn-danger p-2">Cancel</a>
                            </div>
                        </div>
        
                    </form>
                </div>
            </div>
        </div>
    </div>
</section><br><br>

@endsection