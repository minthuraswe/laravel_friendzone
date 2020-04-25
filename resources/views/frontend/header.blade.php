<section  class="header-bg" >
    <div class="container pt-2 pb-2">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg">
                    <div title="Friendzone Cafe & Restaurant">
                        <h2 class="fz">Friend Zone</h2>
                        <small class="cf-rs">Cafe & Restaurants</small>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                        <div class="collapse navbar-collapse menu-margin-top" id="navbarNavDropdown">
                            <ul class="navbar-nav ml-auto text-in-btn">
                                <div class="border-bottom border-dark">
                                    <li class="nav-item <?php if ($current_page == 'index') {echo "active"; } ?> li-margin-right mb-1 mt-1">
                                        <a class="nav-link pl-4 pr-4" href="{{url('/index')}}">Home</a>
                                    </li>
                                </div>
                                <div class="border-bottom border-dark">
                                    <li class="nav-item <?php if ($current_page == 'menu') {echo "active"; } ?>  li-margin-right mb-1 mt-1">
                                        <a class="nav-link pl-4 pr-4" href="{{url('/menus')}}">Menu</a>
                                    </li>
                                  </div>
                                <div class="border-bottom border-dark">
                                    <li class="nav-item <?php if ($current_page == 'gallery') {echo "active"; } ?> li-margin-right mb-1 mt-1 ">
                                        <a class="nav-link pl-4 pr-4" href="{{url('/gallery')}}">Gallery</a>
                                    </li>
                                </div>
                                <div class="border-bottom border-dark">
                                    <li class="nav-item <?php if ($current_page == 'contactus') {echo "active"; } ?> li-margin-right mb-1 mt-1">
                                        <a class="nav-link pl-4 pr-4" href="{{url('/contact')}}">Contact</a>
                                    </li>
                                </div>
                            </ul>
                        </div>
                </nav>
            <div>
        </div>
    </div>
</section>