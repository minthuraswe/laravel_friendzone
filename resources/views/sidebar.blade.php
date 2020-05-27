<!-- /# sidebar -->
<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <div class="logo"><a href="{{url('/admin')}}"><!-- <img src="assets/images/logo.png" alt="" /> --><span>FriendZone</span></a></div>
            <ul>
                <li class="label">Main</li>
                    <li  class="{{(request()->is('admin')) ? 'active' : ''}}">
                        <a href="{{url('/admin')}}" >
                            <i class="ti-home"></i> Dashboard</a>
                </li>

                <li class="label">Foods</li>
                <li class="{{(request()->is('food*')) ? 'active' : ''}}"><a href="{{url('/food')}}"><i class="ti-bar-chart-alt"></i>  Food Table</a></li>
                
               
                <li class="label">Menu</li>
                <li  class="{{(request()->is('menu*')) ? 'active' : ''}}"><a href="{{url('/menu')}}"><i class="ti-panel"></i> Menu Table </a></li>
               
               
                <li class="label">Form</li>
                <li  class="{{(request()->is('feedback*')) ? 'active' : ''}}"><a href="{{url('/feedback')}}"><i class="ti-view-list-alt"></i> User Feedback </a></li>
                
                <li style="margin-top:11.8rem;" class="border-top">
                    <p class="p-4">{{date('Y')}} © FriendZone</p>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /# sidebar -->


<div class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="float-left">
                    <a href="/admin"><h5 class="pt-3">Dashboard</h5></a>
                    {{-- <div class="hamburger sidebar-toggle">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>  --}}
                </div>
                <div class="float-right">
                    <ul>
                        <li class="header-icon dib"><span class="user-avatar">{{Auth::user()->name}} <i class="ti-angle-down f-s-10"></i></span>
                            <div class="drop-down dropdown-profile">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li><a href="/edit"><img src="{{asset('user/images/edit.png')}}" class="mr-2"><span>Edit Profile</span></a></li>
                                        {{-- <li><a href="/change_user_pass"><img src="{{asset('user/images/edit.png')}}" class="mr-2"><span>Change Password</span></a></li> --}}
                                       
                                        <li><a href="{{route('register')}}"><i class="ti-user"></i> <span>Register</span></a></li>
      
                                        <li>
                                            <a href="{{ route('logout') }}" 
                                                onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                                 <i class="ti-power-off"></i> <span> Logout</span>
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                             @csrf
                                            </form>
                                        </li>
                                     
                                        {{-- <li><a href="#"><i class="ti-email"></i> <span>Inbox</span></a></li>
                                        <li><a href="#"><i class="ti-settings"></i> <span>Setting</span></a></li> --}}
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row  mt-3 ">
                <div class="col-lg-12 title-margin-right  ">
                    <ol class="breadcrumb mb-0">
                       <div class="float-left"> <li>    <?php echo date("F j, Y") ?> </li></div>
                        <div class="float-right "><li class="breadcrumb-item">Dashboard</li>
                        <?php $segments = ''; ?>
                        @foreach(Request::segments() as $segment)
                            <?php $segments .= '/'.$segment; ?>
                            <li class="breadcrumb-item active">
                                <span>{{$segment}}</span>
                            </li>
                        @endforeach
                        </div>
                    </ol>
                </div>
                
            </div>