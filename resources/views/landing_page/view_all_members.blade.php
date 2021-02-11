@extends('layouts.auth_layout')
@section('custom_style')
    <link href="/plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection
@section('content')
    <div class="row justify-content-center my-5">
        <!-- column -->
        <div class="col-md-12 mt-4 mb-5" >
            <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);">
                <div class="card-body">
                    <!-- title -->
                    <div class="d-md-flex align-items-center">
                        <div>
                            <h1 class="card-title text-primary">Overview of All Members</h1>
                            @if($data['found'])
                                <h5 class="card-subtitle text-success">Total Members : <span class="text-info">{{$data['members_count']}}</span></h5>
                            @else
                                <h5 class="card-subtitle text-danger">No Members has been registered</h5>
                            @endif
                        </div>
                    </div>
                    <!-- title -->
                </div>
                @if($data['found'])
                    <div class="table-responsive mb-5">
                        <table class="table table-striped zero-configuration">
                            <thead>
                            <tr class=" text-white font-weight-bold" style="background: #009970">
                                <th class="border-top-0">Member</th>
                                <th class="border-top-0">Email</th>
                                <th class="border-top-0">Phone</th>
                                <th class="border-top-0">Address</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($data['data'] as $all)
                                <tr>
                                    <td><img src="{{ $all->photo_url != null ? url('storage'.$all->photo_url):'/assets/img/avatar/avatar.png'}}" class=" rounded-circle mr-3" alt="" style="height: 40px; width: 40px">{{$all->name}}</td>
                                    <td>{{$all->email}}</td>
                                    <td>{{$all->phone}}</td>
                                    <td>{{$all->address}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>
    </div>
@endsection



@section('extra_js')
    <script src="/plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="/plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="/plugins/tables/js/datatable-init/datatable-basic.min.js"></script>
@endsection
