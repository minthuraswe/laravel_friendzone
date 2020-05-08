@extends('layouts.master')
@section('content')

<section id="main-content">
    <div class="row">
        <div class="col-md-12"> 
            <div class="card">
                <div class="card-header mb-2" style="font-size:17px;">Creating Menu</div>
                    <div class="card-body">
                        <form action="{{url('/menu')}}" method="post" accept-charset="UTF-8">
                            @csrf
                           
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label mt-2 text-md-right">Enter Menu Name</label>
                                <div class="col-md-6">
                                    <input  class="form-control border" type="text" name="menu_name">
                                    @if ($errors->has('menu_name'))
                                    <span class="text-danger">
                                       <sm>{{ $errors->first('menu_name') }}</sm>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-gruop row">
                                <div class="col-md-4"></div>
                                <div class="col-md-6">
                                <input type="submit" class="btn btn-success" name="submit" value="Create">
                                <a href="{{url('/menu')}}" class="btn btn-danger">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</section>
    
@endsection