@extends('layouts.dashboard_layout')
@section('content')
    <div class="container-fluid px-lg-4">

        {{-------------------Profile Info----------------}}
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-5">
                                    <div class="col">
                                        <div class="card card-profile text-center">
                                            <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                            <p class="text-dark px-4 font-weight-bold">
                                                Dasshboard
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="media align-items-center mb-4">
                                    <img class="mr-3" src="{{auth()->user()->photo_url != null ? url('storage/'.auth()->user()->photo_url) : '/assets/img/null/avatar.jpg'}}" width="80" height="80" alt="">
                                    <div class="media-body">
                                        <h3 class="mb-0">{{auth()->user()->name}}</h3>
                                        {{--<p class="text-muted mb-0">

                                        </p>--}}
                                    </div>
                                </div>
                                <button class="btn btn-danger my-3">Account Information</button>
                                <table>
                                    <tr>
                                        <td><strong class="text-dark mr-4 font-weight-bold">Phone</strong></td>
                                        <td class="mr-4">{{auth()->user()->phone}}</td>
                                    </tr>
                                    <tr>
                                        <td><strong class="text-dark mr-4 font-weight-bold">Email</strong></td>
                                        <td class="mr-4">{{auth()->user()->email}}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

