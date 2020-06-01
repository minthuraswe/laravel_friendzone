@extends('layouts.master')
@section('content')

<section id="main-content">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header mb-2">Editing Food Form</div>
                <div class="card-body">
                    <form action="{{url('food/' . $food->id )}}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Enter Food Name</label>
                            <div class="col-md-6">
                                <input id="email" class="form-control border" type="text" name="foodname"
                                    value="{{old('foodname', $food->foodname)}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">Enter Food Image</label>
                            <div class="col-md-6">
                                <input type="file" name="foodimage" class="border form-control"
                                    value="{{$food->foodimage}}">
                                @if ($errors->has('foodimage'))
                                <span class="text-danger">
                                    <sm>{{ $errors->first('foodimage') }}</sm>
                                </span><br>
                                @endif
                                <img src="{{asset('/uploads/'. $food->foodimage)}}" class="mt-2 img-thumbnail"
                                    width="100" />
                                {{-- <input type="hidden" name="foodimage" value="{{ $food->foodimage }}" /> --}}

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Enter Food
                                Ingredient</label>
                            <div class="col-md-6">
                                <textarea id="email" class="form-control border" type="text" style="height:80px;"
                                name="foodingredient">{{old('foodingredient',$food->foodingredient)}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Enter Food Pice</label>
                            <div class="col-md-6">
                                <input id="email" class="form-control border" type="number" name="foodprice"
                                    value="{{old('foodprice', $food->foodprice)}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Enter Food Menu</label>
                            <div class="col-md-6">
                                <select class=" form-control border" name="menuname">
                                    @foreach ($data as $item)
                                    @if($item->id == $food->menu_id)
                                    <option value="{{$item->id}}" selected>{{$food->menu->menu_name}}
                                    </option>
                                    @else
                                    <option value="{{$item->id}}" {{old('menuname') == $item->id ? 'selected' : ''}}>{{$item->menu_name}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-gruop row mb-0">
                            <div class="col-md-4"></div>
                            <div class="col-md-6">
                                <input type="submit" class="btn btn-primary " name="submit" value="Update">
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