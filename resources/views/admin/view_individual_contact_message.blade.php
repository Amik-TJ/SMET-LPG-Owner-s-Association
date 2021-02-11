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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{------------------------messages Cards-------------------------------}}
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="email-middle-box ">
                                <div class="read-content">
                                    <div class="media pt-5">
                                        <img class="mr-3 rounded-circle" src="{{url('storage/Assets/avatar.jpg')}}" style="height: 55px; width: 55px">
                                        <div class="media-body">
                                            <h5 class="m-b-3">{{$message->name}}</h5>
                                            <p class="m-b-2">{{(new DateTime($message->created_at))->format("d M Y")}}</p>
                                        </div>

                                    </div>
                                    <hr>
                                    <div class="media mb-4 mt-1">
                                        <div class="media-body"><span class="float-right">{{(new DateTime($message->created_at))->format("h:i A")}}</span>
                                            <h5 class="m-0 text-primary"><span class="font-weight-bold text-info">Subject : </span>{{$message->subject}}</h5>
                                        </div>
                                    </div>
                                    <h4 class="m-b-15">Message : </h4>
                                    <p class="text-dark">{{$message->message}}</p>

                                    <br>
                                    <br>
                                    <br>

                                    <h6 class="text-warning font-weight-bold">Phone : <span CLASS="text-dark">{{ $message->phone == null ? 'Not Available' : $message->phone }}</span></h6>
                                    <h6 class="text-warning font-weight-bold">Email : <span CLASS="text-dark">{{$message->email}}</span></h6>
                                </div>
                                <div class="text-right">
                                    <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to={{$message->email}}" class="btn btn-primary w-md m-b-30" target="_blank"><i class="fa fa-paper-plane m-r-5"></i> Reply</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        {{------------------------messages Cards Ends-------------------------------}}

    </div>
@endsection



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
