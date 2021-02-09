@extends('layouts.dashboard_layout')
@section('custom_style')
    {{--<link href="/plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">--}}
@endsection

@section('content')
    <div class="container-fluid px-lg-4">
        <div class="row">

        {{----------------------------------Table Starts-------------------------------------------}}
        @php($station = $data['station'])
        @php($doc = $data['data'])
        <!-- column -->
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-body">
                        <!-- title -->
                        <div class="col-md-12 mt-lg-4 mt-4">
                            <!-- Page Heading -->

                                @if($data['found'])
                                    <h4 class="h2 mb-0 text-gray-800 text-primary font-weight-bold">Station Name : <span class="text-purple">{{$station->station_name}}</span></h4>
                                <h4 class="h2 mb-0 text-gray-800 text-primary font-weight-bold">Station ID : <span class="text-purple">{{$station->station_id}} </span></h4>
                                @else
                                    <h3 class="h2 mb-0 text-gray-800 text-danger">No Documents for this Station</h3>
                                @endif
                        </div>
                        <!-- title -->
                    </div>
                    @if($data['found'])
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped zero-configuration">
                                                <thead>
                                                <tr class=" text-white font-weight-bold" style="background-color: #009970;">
                                                        @if($doc['tin'])
                                                            <th class="border-top-0">TIN Certificate</th>
                                                        @endif
                                                        @if($doc['nid'])
                                                            <th class="border-top-0">NID Card</th>
                                                        @endif
                                                        @if($doc['license_copy'])
                                                            <th class="border-top-0">Explosive License Copy</th>
                                                        @endif
                                                    @if(!$station->verified)
                                                        <th class="border-top-0">Action</th>
                                                    @endif
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>

                                                        @if($doc['tin'])
                                                            <td>
                                                                <a href="{{url('storage'.$doc['tin']->url)}}" download><button  class="btn btn-success font-weight-bold my-3">TIN Download</button></a>
                                                            </td>
                                                        @endif

                                                        @if($doc['nid'])
                                                            <td>
                                                                <a href="{{url('storage'.$doc['nid']->url)}}" download><button  class="btn btn-success font-weight-bold my-3">NID Download</button></a>
                                                            </td>
                                                        @endif
                                                        @if($doc['license_copy'])
                                                            <td>
                                                                <a href="{{url('storage'.$doc['license_copy']->url)}}" download><button  class="btn btn-success font-weight-bold my-3">License Download</button></a>
                                                            </td>
                                                        @endif
                                                        @if(!$station->verified)
                                                            <td class="text-center align-middle">
                                                                <form action="/verify_station" method="POST">
                                                                    @csrf
                                                                    <input type="hidden" name="station_id" value="{{$station->station_id}}">
                                                                    <button type="submit" class="btn btn-warning">Verify</button>
                                                                </form>
                                                            </td>
                                                        @endif
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection



@section('extra_js')
    {{--<script src="/plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="/plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="/plugins/tables/js/datatable-init/datatable-basic.min.js"></script>--}}
@endsection

