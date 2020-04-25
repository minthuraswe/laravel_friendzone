@extends('layouts.master')
@section('content')
    
<section id="main-content">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header mb-2">Editing Food Form</div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li  style="list-style-type:square;">{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{url('food/' . $food->id )}}" method="post" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Enter Food Name</label>
                                <div class="col-md-6">
                                <input id="email" class="form-control border" type="text" name="foodname" value="{{$food->foodname}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="image" class="col-md-4 col-form-label text-md-right">Enter Food Image</label>
                                <div class="col-md-6">
                                <input type="file" name="foodimage"  class="border form-control" value="{{$food->foodimage}}">
                                <img src="{{asset('/uploads/'. $food->foodimage)}}" class="mt-2 img-thumbnail" width="100" />
                                {{-- <input type="hidden" name="foodimage" value="{{ $food->foodimage }}" /> --}}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Enter Food Ingredient</label>
                                <div class="col-md-6">
                                <input id="email" class="form-control border" type="text" name="foodingredient" value="{{$food->foodingredient}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Enter Food Pice</label>
                                <div class="col-md-6">
                                <input id="email" class="form-control border" type="integer" name="foodprice" value="{{$food->foodprice}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Enter Food Menu</label>
                                <div class="col-md-6">
                                    <select class=" form-control border" name="menuname">
                                        @foreach ($data as $item)
                                            @if($item->id == $food->menu_id)
                                                <option value="{{$item->id}}" selected="selected">{{$food->menu->menu_name}}</option>
                                            @else
                                                <option value="{{$item->id}}">{{$item->menu_name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-gruop row mb-0">
                                <div class="col-md-12">
                                <input type="submit" class="btn btn-primary btn-block" name="submit" value="Update">
                                <a href="{{url('/food')}}" class="btn btn-danger btn-block mt-2 p-2">Cancel</a>
                            </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</section><br><br>

@endsection