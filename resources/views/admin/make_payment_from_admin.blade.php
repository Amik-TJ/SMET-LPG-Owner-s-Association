@extends('layouts.dashboard_layout')

@section('custom_style')

@endsection


@section('content')
    @php($po = $data['po'])
    @php($station_id = $data['station_id'])
    <div class="container-fluid px-lg-4">

        {{-------------------Profile Info----------------}}
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="h3 text-center my-4 text-info">Make Payment for Station No : <span class="h2 text-danger">{{$station_id}}  from Admin Panel</span></div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="form-valide" action="/make_and_verify_payment_from_admin" method="post">
                                @csrf
                                <input type="hidden" name="station_id" value="{{$station_id}}">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="payment_option">Payment Option <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <select class="form-control" id="payment_option" name="payment_option">
                                            <option value="">Select Payment Option</option>
                                            @foreach($po as $p)
                                                <option value="{{$p->option_id}}">{{$p->option_name}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="tx_id">Transaction ID <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="tx_id" name="tx_id" placeholder="Enter a Transaction ID..">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="amount">Amount Paid: <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="amount" name="amount" placeholder="Enter the amount that you have paid">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="amount_received">Note :
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="note" name="note" placeholder="Enter Any note. It is optinal.....">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-8 ml-auto">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



@section('extra_js')
    <script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function () {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
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
