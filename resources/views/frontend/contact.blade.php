@extends('frontend.layouts.master')
<?php $current_page = "contactus"; ?>
@section('title', 'FriendZone | Contact')

@section('content')
@include('frontend.header')

    <section style="background-color:#131313;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 contact-border ">
                    <form action="{{url('/feedback')}}" method="post" class="contact-padding"  style="margin-block-end:0" accept-charset="UTF-8">
                        @csrf
                        <div class="form-group mb-4 text-center">
                            <h2 class="text-light fz welcome-fz">Send Us Message</h2>
                        </div>
                            @if(session('status'))
                            <p class="alert alert-success animated fadeIn border border-success text-success">
                               {{session('status')}} 
                            </p>
                             @endif
                            <div class="form-group">
                               <input type="text" class="form-control"  name="name" placeholder="Your Name" value="{{old('name')}}">
                               @if ($errors->has('name'))
                                <span class="text-danger">
                                   <sm>{{ $errors->first('name') }}</sm>
                                </span>
                                @endif
                            </div>  
                            <div class="form-group ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email" value="{{old('email')}}">
                                @if ($errors->has('email'))
                                <span class="text-danger">
                                   <sm>{{ $errors->first('email') }}</sm>
                                </span>
                                 @endif
                            </div>
                            <div class="form-group ">
                                <textarea class="form-control" name="message" id="message" rows="7" placeholder="Your Message">{{old('message')}}</textarea>
                                @if ($errors->has('message'))
                                <span class="text-danger">
                                   <sm>{{ $errors->first('message') }}</sm>
                                </span>
                                @endif
                            </div>
                            <div class="form-group text-center mt-4">
                                <button type="submit" class="btn btn-warning text-in-btn"><a>Submit</a></button>
                            </div>
                        </form>
                </div>
                {{-- <div class="col-md-6 p-0">
                    <div class="form-group p-5">
                        <h2 class="text-light  mb-4">Contact with Social</h2>
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffriendzonecafeandrestaurantpkk%2F%3Fref%3Dbr_tf%26epa%3DSEARCH_BOX&tabs=timeline&width=418&height=470&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=true&appId=776030982892136" width="100%" height="340" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media" class="border"></iframe>
                        <div class="form-group mt-3">
                            <button  class="btn btn-warning btn-block form-name text-in-btn" type="text" disabled>We Made with love, Served with love</button>
                        </div>
                    </div>
                 
               
                </div> --}}
            </div>
            <div class="row">
                <div class="col-md-12 p-0">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1141.010492790111!2d95.07806412583159!3d21.33630904754761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ca0b9bf7726e99%3A0x458125c94f95997f!2sFriend%20Zone%20Caf%C3%A9%20%26%20Restaurant!5e1!3m2!1sen!2smm!4v1581610370090!5m2!1sen!2smm" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </section>
    
@include('frontend.footer')
@endsection