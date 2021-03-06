<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
        <div class="header-container d-flex align-items-center">
            {{--<div class="logo mr-auto">
                <h1 class="text-light"><a href="/"><span>BD LPG</span></a></h1>
            </div>--}}

            <div class="logo mr-auto">
            {{--                <h1 class="text-light"><a href="index.html"><span>BD LPG</span></a></h1>--}}
            <!-- Uncomment below if you prefer to use an image logo -->
                <a href="/"><img src="{{url('storage/Landing_Page/association_logo/lpg_association.png')}}" alt="" class="img-fluid" height="120px" width="100px"></a>
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li><a href="/view_gallery">Gallery</a></li>
                    {{--<li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#team">Team</a></li>--}}
                    <li class="drop-down"><a href="">Committee</a>
                        <ul>
                            <li><a href="/view_central_committee">Central Committee</a></li>
                            <li><a href="/view_zonal_committee">Zonal Committee</a></li>
                        </ul>
                    </li>
                    <li><a href="/landing_view_members">Members</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="">Download</a></li>
                    <li><a href="">Notices</a></li>

                    @auth
                        <li class=""><a href="/dashboard">Dashboard</a></li>
                    @else
                        <li><a href="{{ route('login') }}">Login</a></li>
                    @endauth

                    <li class="get-started"><a href="{{ route('register') }}">Register</a></li>
                </ul>
            </nav><!-- .nav-menu -->
        </div><!-- End Header Container -->
    </div>
</header>
<!-- End Header -->
