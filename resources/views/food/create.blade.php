@extends('layouts.master')
@section('content')

<section id="main-content">
    <div class="row">
        <div class="col-md-12"> 
            <div class="card">
                <div class="card-header mb-2" style="font-size:17px;">Uploading Food</div>
                    <div class="card-body">
                        <form action="{{url('/food')}}" method="post" enctype="multipart/form-data" accept-charset="UTF-8">
                            @csrf
                           
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right mt-2">Enter Food Name</label>
                                <div class="col-md-6">
                                <input id="name" class="form-control border " type="text" name="foodname" value="{{old('foodname')}}">
                                @if ($errors->has('foodname'))
                                <span class="text-danger">
                                   <sm>{{ $errors->first('foodname') }}</sm>
                                </span>
                                @endif
                            </div>
                            </div>
                            <div class="form-group row">
                                <label for="image" class="col-md-4 col-form-label text-md-right mt-2">Enter Food Image</label>
                                <div class="col-md-6">
                                <input id="image" class="form-control border" type="file" name="foodimage" value="{{old('foodimage')}}" >
                                @if ($errors->has('foodimage'))
                                <span class="text-danger">
                                   <sm>{{ $errors->first('foodimage') }}</sm>
                                </span>
                                @endif
                             
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="text" class="col-md-4 col-form-label text-md-right mt-4">Enter Food Ingredients</label>
                                <div class="col-md-6">
                                    <textarea style="height:80px;" class="form-control border" name="foodingredient" id="text"> {{old('foodingredient')}}</textarea>
                                    @if ($errors->has('foodingredient'))
                                    <span class="text-danger">
                                       <sm>{{ $errors->first('foodingredient') }}</sm>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="text" class="col-md-4 col-form-label text-md-right mt-2">Enter Food pirce</label>
                                <div class="col-md-6">
                                <input class="form-control border" type="number" name="foodprice" value="{{old('foodprice')}}">
                                @if ($errors->has('foodprice'))
                                <span class="text-danger">
                                   <sm>{{ $errors->first('foodprice') }}</sm>
                                </span>
                                @endif
                            </div>
                            </div>
                            <div class="form-group row">
                                <label for="text" class="col-md-4 col-form-label text-md-right mt-2">Choose Menu</label>
                                <div class="col-md-6">
                                <select class=" form-control border" name="menuname">
                                <option value="">Choose Menu</option>
                                    @foreach ($data as $menu)
                                    @if(Request::old('menuname') == $menu->id)
                                    <option value="{{$menu->id}}" selected>{{$menu->menu_name}}</option>
                                    @else
                                    <option value="{{$menu->id}}">{{$menu->menu_name}}</option>
                                    @endif
                                    @endforeach
                                </select>
                                @if ($errors->has('menuname'))
                                <span class="text-danger">
                                   <sm>{{ $errors->first('menuname') }}</sm>
                                </span>
                                @endif
                                </div>
                            </div>
                            <div class="form-gruop row mb-0">
                                <div class="col-md-4"></div>
                                <div class="col-md-6">
                                <input type="submit" class="btn btn-success" name="submit" value="Upload">
                                <a href="{{url('/food')}}" class="btn btn-danger">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</section><br><br><br><br><br><br>



@endsection