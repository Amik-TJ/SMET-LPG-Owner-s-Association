<!--**********************************
            Nav header start
        ***********************************-->

{{--@php
    $message = \App\Helpers\Helper::get_user_messages(auth()->user()->userID);
    $notification = \App\Helpers\Helper::get_user_notifications(auth()->user()->userID);
@endphp--}}



<div class="nav-header" style="background-color: #009970;">
    <div class="brand-logo" >
        <a href="/dashboard">
            <b class="logo-abbr"><img src="" alt=""> </b>
            <span class="logo-compact"><img src="" alt=""></span>
            <span class="brand-title text-center">
                {{--<img src="/assets/img/logo.png" alt="" style="height: 40px;width: 60px;">--}}<span class="text-white font-weight-bold text-center">Dashboard</span>
            </span>
        </a>
    </div>
</div>
<!--**********************************
    Nav header end
***********************************-->

<!--**********************************
    Header start
***********************************-->
<div class="header">
    <div class="header-content clearfix">

        <div class="nav-control">
            <div class="hamburger">
                <span class="toggle-icon"><i class="icon-menu"></i></span>
            </div>
        </div>
        <div class="header-left">
            <div class="input-group icons">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
                </div>
                <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
                <div class="drop-down animated flipInX d-md-none">
                    <form action="#">
                        <input type="text" class="form-control" placeholder="Search">
                    </form>
                </div>
            </div>
        </div>
        <div class="header-right">
            <ul class="clearfix">
                {{--<li class="icons dropdown d-none d-md-flex">
                    <a href="javascript:void(0)" class="log-user"  data-toggle="dropdown">
                        <span>English</span>  <i class="fa fa-angle-down f-s-14" aria-hidden="true"></i>
                    </a>
                    <div class="drop-down dropdown-language animated fadeIn  dropdown-menu">
                        <div class="dropdown-content-body">
                            <ul>
                                <li><a href="javascript:void()">English</a></li>
                                <li><a href="javascript:void()">Dutch</a></li>
                            </ul>
                        </div>
                    </div>
                </li>--}}
                <li class="icons dropdown">
                    <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                        <span class="activity active"></span>
                        <img src="{{auth()->user()->photo_url != null ? url('storage/'.auth()->user()->photo_url) : '/assets/img/null/avatar.jpg'}}" height="40" width="40" alt="">
                    </div>
                    <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                        <div class="dropdown-content-body">
                            <ul>
                                <li>
                                    <a href=""><i class="icon-user"></i> <span>Edit Profile</span></a>
                                </li>
                                {{--<li>
                                    <a href="/see_more_message">
                                        <i class="icon-envelope-open"></i> <span>Inbox</span> <div class="badge gradient-3 badge-pill @if($message['seen_count']) gradient-1 @endif">{{$message['seen_count']}}</div>
                                    </a>
                                </li>--}}
                                <hr class="my-2">
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        <i class="icon-key"></i> <span>Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--**********************************
    Header end ti-comment-alt
***********************************-->
