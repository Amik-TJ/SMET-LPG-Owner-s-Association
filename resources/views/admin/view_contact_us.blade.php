@extends('layouts.dashboard_layout')
@php($message = $data)


@section('content')
    <div class="container-fluid px-lg-4">

        {{-------------------Profile Info----------------}}
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="card card-profile text-center">
                                            <span class="mb-1 text-primary"><i class="icon-globe"></i></span>
                                            <p class="text-dark px-4 font-weight-bold">
                                                Messages
                                            </p>
                                        </div>
                                        <div class="text-center">
                                            @if($message['seen_count'] > 0)
                                                <span class="text-success font-weight-bold"> {{$message['seen_count'] }} New messages </span>
                                            @else
                                                <span class="text-danger font-weight-bold"> No New messages </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <form id="search_form" method="post" action="/view_individual_message">
            @csrf
            <input type="hidden" name="msg_id" id="msg_id" value="">
            <button type="submit" name="search_submit"></button>
        </form>
        {{------------------------messages Cards-------------------------------}}
        @if($message['m_found'])
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="custom-media-object-2">
                                @foreach($message['messages'] as $msg)
                                        <a href="" onclick="search_function(<?php echo $msg->msg_id ?>);return false;">
                                            <div class="media border-bottom-1 p-t-15 mb-2" >
                                                <img class="rounded-circle mr-3" src="{{url('storage/Assets/avatar.jpg')}}" style="height: 55px; width: 55px">
                                                <div class="media-body">
                                                    <div class="row">
                                                        <div class="col-lg-7 col-sm-12 mt-1">
                                                            <h5 class="{{$msg->seen == 0 ? 'font-weight-bold text-dark':''}}">{{$msg->name}}</h5>
                                                            <p class="{{$msg->seen == 0 ? 'font-weight-bold text-primary':''}}">
                                                                @if(strlen($msg->message) < 100)
                                                                    {{$msg->message}}
                                                                @else
                                                                    {{substr($msg->message, 0, 100)}} ...
                                                                @endif
                                                            </p>
                                                        </div>
                                                        <div class="col-lg-5 col-sm-2 text-right">
                                                            <h5 class="text-muted"><i class="color-danger ti-minus m-r-5"></i><span class="BTC m-l-10">{{(new DateTime($msg->created_at))->format("d-m-Y")}}</span></h5>
                                                            <p class="f-s-13 text-muted"><span class="m-l-10">{{(new DateTime($msg->created_at))->format("h:i A")}}</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        {{------------------------messages Cards Ends-------------------------------}}

    </div>




@endsection

<script>
    function search_function(keyword) {
        console.log(keyword);
        document.getElementById("msg_id").value = keyword;
        document.getElementById('search_form').submit();
    }
</script>

@section('extra_js')
    <!-- Chartjs -->
    <script src="/plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Circle progress -->
    <script src="/plugins/circle-progress/circle-progress.min.js"></script>
    <!-- Datamap -->
    <script src="/plugins/d3v3/index.js"></script>
    <script src="/plugins/topojson/topojson.min.js"></script>
    <script src="/plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Morrisjs -->
    <script src="/plugins/raphael/raphael.min.js"></script>
    <script src="/plugins/morris/morris.min.js"></script>
    <!-- Pignose Calender -->
    <script src="/plugins/moment/moment.min.js"></script>
    <script src="/plugins/pg-calendar/js/pignose.calendar.min.js"></script>
    <!-- ChartistJS -->
    <script src="/plugins/chartist/js/chartist.min.js"></script>
    <script src="/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>



    <script src="/js/dashboard/dashboard-1.js"></script>
@endsection
