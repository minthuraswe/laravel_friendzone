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
                                <input id="email" class="form-control border" type="text" name="name"
                                    value="{{old('name', $food->foodname)}}" required>
                            </div>
                        </div>
                    
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Enter Food
                                Ingredient</label>
                            <div class="col-md-6">
                                <textarea id="email" class="form-control border" type="text" style="height:80px;"
                                name="ingredient" required>{{old('ingredient',$food->foodingredient)}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Enter Food Pice</label>
                            <div class="col-md-6">
                                <input id="email" class="form-control border" type="number" name="price"
                                    value="{{old('price', $food->foodprice)}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Enter Food Menu</label>
                            <div class="col-md-6">
                                <select class=" form-control border" name="menuname" required>
                                    <option value="">Choose Menu</option>
                                    @foreach ($data as $item)
                                    @if($item->id == $food->menu_id)
                                    <option value="{{$item->id}}" selected>{{$item->menu_name}}
                                    </option>
                                    @else
                                    <option value="{{$item->id}}">{{$item->menu_name}}</option>
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