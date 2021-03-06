@extends('layouts.dashboard_layout')
@section('custom_style')
    <link href="/plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="container-fluid px-lg-4">
        <div class="row">

        {{----------------------------------Table Starts-------------------------------------------}}

        <!-- column -->
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-body">
                        <!-- title -->
                        <div class="col-md-12 mt-lg-4 mt-4">
                            <!-- Page Heading -->
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                @if($data['found'])
                                    <h1 class="h2 mb-0 text-gray-800 text-info font-weight-bold">Overview of your Stations</h1>
                                @else
                                    <h1 class="h2 mb-0 text-gray-800 text-danger">You haven't registered any Stations</h1>
                                @endif
                                <button type="button" class="d-none d-sm-inline-block btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#create_station_modal"><i class="fas fa-hourglass-start"></i>
                                    Add Station
                                </button>

                            </div>
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
                                                <th class="border-top-0">Station ID</th>
                                                <th class="border-top-0">Membership ID</th>
                                                <th class="border-top-0">Station Name</th>
                                                <th class="border-top-0">Status</th>
                                                <th class="border-top-0">Division</th>
                                                <th class="border-top-0">Address</th>
                                                <th class="border-top-0">Contact Person Name</th>
                                                <th class="border-top-0">Contact Person Cell</th>
                                                <th class="border-top-0">Journey Date</th>
                                                <th class="border-top-0">Conversion Workshop</th>
                                                <th class="border-top-0">Verified</th>
                                                <th class="border-top-0">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($data['data'] as $station)

                                                <tr>
                                                    <td>{{$station->station_id}}</td>
                                                    <td>{{$station->membership_id}}</td>
                                                    <td>{{$station->station_name}}</td>
                                                    <td>
                                                        @if($station->station_status == "Up Coming")
                                                            <i class="fa fa-circle-o text-primary  mr-2"></i>
                                                        @elseif($station->station_status == "On Going")
                                                            <i class="fa fa-circle-o text-warning  mr-2"></i>
                                                        @elseif($station->station_status == "Running")
                                                            <i class="fa fa-circle-o text-success  mr-2"></i>
                                                        @else
                                                            <i class="fa fa-circle-o text-info  mr-2"></i>
                                                        @endif

                                                        {{$station->station_status}}
                                                    </td>
                                                    <td>{{$station->division}}</td>
                                                    <td>{{$station->station_address}}</td>
                                                    <td>{{$station->contact_person_name}}</td>
                                                    <td>{{$station->contact_person_phone}}</td>
                                                    <td>{{(new DateTime($station->starting_date))->format("d-m-Y")}}</td>
                                                    <td>
                                                        @if($station->has_workshop)
                                                            Yes
                                                        @else
                                                           No
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if($station->verified)
                                                            <span class="font-weight-bold text-success">Yes</span>
                                                        @else
                                                            <span class="font-weight-bold text-danger">No</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if(!$station->payment_id)
                                                            <form action="/view_payment_page" method="POST">
                                                                @csrf
                                                                <input type="hidden" value="{{$station->station_id}}" name="station_id">
                                                                <button type="submit" class="btn btn-danger btn-sm">Make Payment</button>
                                                            </form>
                                                        @else
                                                            <span class="font-weight-bold text-success">Payment Done</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
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





    {{--------------------------------View More Details Modal Starts---------------------------}}

    <div class="modal fade" id="view_more_modal" tabindex="-1" role="dialog" aria-labelledby="view_more_modalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="text-centers text-secondary font-weight-bold" id="view_more_modal_title">Order No<span id="m_order_id"></span></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table>
                        <tbody>

                        <tr>
                            <td class="text-primary font-weight-bold">User ID</td>
                            <td id="m_user_id"></td>
                        </tr>

                        <tr>
                            <td class="text-primary font-weight-bold">Payment ID</td>
                            <td id="m_payment_id"></td>
                        </tr>
                        <tr>
                            <td class="text-primary font-weight-bold">Package Id</td>
                            <td id="m_package_id"></td>
                        </tr>
                        <tr>
                            <td class="text-primary font-weight-bold">Package Type</td>
                            <td id="m_package_type"></td>
                        </tr>
                        <tr>
                            <td class="text-primary font-weight-bold">Round Option</td>
                            <td id="m_round_option"></td>
                        </tr>
                        <tr>
                            <td class="text-primary font-weight-bold">Spot Option</td>
                            <td id="m_spot_option"></td>
                        </tr>
                        <tr>
                            <td class="text-primary font-weight-bold">Current Status</td>
                            <td id="m_status"></td>
                        </tr>
                        <tr>
                            <td class="text-primary font-weight-bold">Amount to be Paid</td>
                            <td id="m_amount"></td>
                        </tr>
                        <tr>
                            <td class="text-primary font-weight-bold">Transaction Option</td>
                            <td id="m_payment_option_name"></td>
                        </tr>
                        <tr>
                            <td class="text-primary font-weight-bold">Transaction ID</td>
                            <td id="m_tx_id"></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



    {{--------------------------------View More Details Modal Starts---------------------------}}



    <div class="modal fade" id="create_station_modal" tabindex="-1" role="dialog" aria-labelledby="create_package_modalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-success" id="exampleModalLongTitle">Add a new Station</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="/add_new_station" enctype="multipart/form-data">
                        @csrf

                        {{-------------------------- Form Fields ---------------------}}
                        <input type="hidden" name="owner_id" value="{{auth()->user()->id}}">

                        <input type="hidden" name="from" id="from" value="usr">
                        {{-------------------------- Title ---------------------}}
                        <div class="form-group row">
                            <label for="station_name" class="col-md-4 col-form-label text-md-right">{{ __('Station Name') }}</label>

                            <div class="col-md-6">
                                <input id="station_name" type="text" class="form-control" name="station_name" value="{{ old('station_name') }}"  autocomplete="station_name" autofocus required>
                            </div>
                        </div>


                        {{-------------------------- Station Email ---------------------}}
                        <div class="form-group row">
                            <label for="station_email" class="col-md-4 col-form-label text-md-right">{{ __('Station Email') }}</label>

                            <div class="col-md-6">
                                <input id="station_email" type="text" class="form-control" name="station_email" value="{{ old('station_email') }}"  autocomplete="station_email" autofocus required>
                            </div>
                        </div>


                        {{-------------------------- Station Phone ---------------------}}
                        <div class="form-group row">
                            <label for="station_phone" class="col-md-4 col-form-label text-md-right">{{ __('Station Phone') }}</label>

                            <div class="col-md-6">
                                <input id="station_phone" type="number" class="form-control" name="station_phone" value="{{ old('station_phone') }}"  autocomplete="station_phone" autofocus required>
                            </div>
                        </div>
                        {{-------------------------- Product Type ---------------------}}
                        <div class="form-group row">
                            <label for="product_type" class="col-md-4 col-form-label text-md-right">{{ __('Product Type') }}</label>
                            <div class="col-md-6">
                                <select class="form-control" id="product_type" name="product_type">
                                    <option >----</option>
                                    <option value="LPG">LPG</option>
                                    <option value="CNG">CNG</option>
                                    <option value="Petrol">Petrol</option>
                                    <option value="Octan">Octan</option>
                                    <option value="Disel">Disel</option>
                                </select>
                            </div>
                        </div>

                        {{-------------------------- Product Type ---------------------}}
                        <div class="form-group row">
                            <label for="has_workshop" class="col-md-4 col-form-label text-md-right">{{ __('Conversion Workshop') }}</label>
                            <div class="col-md-6">
                                <select class="form-control" id="has_workshop" name="has_workshop">
                                    <option >------</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        {{-------------------------- Station Status ---------------------}}
                        <div class="form-group row">
                            <label for="station_status" class="col-md-4 col-form-label text-md-right">{{ __('Station Status') }}</label>
                            <div class="col-md-6">
                                <select class="form-control" id="station_status" name="station_status">
                                    <option >----</option>
                                    <option value="Up Coming">Up Comming</option>
                                    <option value="On Going">On Going</option>
                                    <option value="Running">Running</option>
                                </select>
                            </div>
                        </div>

                        {{-------------------------- Station Division ---------------------}}
                        <div class="form-group row">
                            <label for="division" class="col-md-4 col-form-label text-md-right">{{ __('Division') }}</label>
                            <div class="col-md-6">
                                <select class="form-control" id="division" name="division">
                                    <option >----</option>
                                    <option value="Dhaka">Dhaka</option>
                                    <option value="Chittagong">Chittagong</option>
                                    <option value="Khulna">Khulna</option>
                                    <option value="Barisal">Barisal</option>
                                    <option value="Sylhet">Sylhet</option>
                                    <option value="Rajshahi">Rajshahi</option>
                                    <option value="Mymensingh">Mymensingh</option>
                                    <option value="Rangpur">Rangpur</option>
                                </select>
                            </div>
                        </div>

                        {{-------------------------- Station Address ---------------------}}
                        <div class="form-group row">
                            <label for="station_address" class="col-md-4 col-form-label text-md-right">{{ __('Station Address') }}</label>

                            <div class="col-md-6">
                                <input id="station_address" type="text" class="form-control" name="station_address" value="{{ old('station_address') }}"  autocomplete="station_address" autofocus required>
                            </div>
                        </div>






                        {{-------------------------- Station Contact Person Name ---------------------}}
                        <div class="form-group row">
                            <label for="contact_person_name" class="col-md-4 col-form-label text-md-right">{{ __('Contact Person Name') }}</label>

                            <div class="col-md-6">
                                <input id="contact_person_name" type="text" class="form-control" name="contact_person_name" value="{{ old('contact_person_name') }}"  autocomplete="contact_person_name" autofocus required>
                            </div>
                        </div>



                        {{-------------------------- Station Contact Person Number ---------------------}}
                        <div class="form-group row">
                            <label for="contact_person_phone" class="col-md-4 col-form-label text-md-right">{{ __('Contact Person Phone') }}</label>

                            <div class="col-md-6">
                                <input id="contact_person_phone" type="number" class="form-control" name="contact_person_phone" value="{{ old('contact_person_phone') }}"  autocomplete="contact_person_phone" autofocus required>
                            </div>
                        </div>


                        {{-------------------------- Station Journey Date ---------------------}}
                        <div class="form-group row">
                            <label for="starting_date" class="col-md-4 col-form-label text-md-right">{{ __('starting_date') }}</label>

                            <div class="col-md-6">
                                <input id="starting_date" type="date" class="form-control" name="starting_date" value="{{ old('starting_date') }}"  autocomplete="starting_date" autofocus required>
                            </div>
                        </div>


                        {{------------------------------------NID Upload-------------------------------}}
                        <div class="form-group row">
                            <label for="nid" class="col-md-4 col-form-label text-md-right mr-3">{{ __('NID') }}</label>
                            <div class="col-md-6 custom-file">
                                <input type="file" class="custom-file-input" id="nid" name="nid">
                                <label class="custom-file-label" for="nid"></label>
                            </div>
                        </div>

                        {{------------------------------------TIN Upload-------------------------------}}
                        <div class="form-group row">
                            <label for="tin" class="col-md-4 col-form-label text-md-right mr-3">{{ __('TIN') }}</label>
                            <div class="col-md-6 custom-file">
                                <input type="file" class="custom-file-input" id="tin" name="tin">
                                <label class="custom-file-label" for="tin"></label>
                            </div>
                        </div>

                        {{------------------------------------License Copy Upload-------------------------------}}
                        <div class="form-group row">
                            <label for="license_copy" class="col-md-4 col-form-label text-md-right mr-3">{{ __('Explosive License Copy') }}</label>
                            <div class="col-md-6 custom-file">
                                <input type="file" class="custom-file-input" id="license_copy" name="license_copy">
                                <label class="custom-file-label" for="license_copy"></label>
                            </div>
                        </div>
                        {{-------------------------- Create Button ---------------------}}
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Create</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
    <!------------------------------------Create Modal Ends------------------------------->












@endsection



@section('extra_js')


    <script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function () {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
    {{--<script>
        $('#view_more_modal').on('show.bs.modal', function (event) {

            var button = $(event.relatedTarget)
            var order_id = button.data('order_id')
            var user_id = button.data('user_id')
            //var order_date = button.data('placed')
            var payment_id = button.data('payment_id')
            var package_id = button.data('package_id')
            var amount = button.data('total_price')
            var package_title = button.data('title')
            var hard_copy_included = button.data('hard_copy_included')
            var one_sided_card = button.data('one_sided_card')
            var rounded_option = button.data('rounded_option')
            var texture_option = button.data('texture_option')
            var spot_option = button.data('spot_option')
            var discount = button.data('discount')
            var status = button.data('status')
            var tx_id = button.data('tx_id')
            var payment_option_name = button.data('payment_option_name')







            document.getElementById("m_order_id").innerHTML = ' :    '+order_id;
            document.getElementById("m_user_id").innerHTML = ' :    '+user_id;
            //document.getElementById("m_order_date").innerHTML = ' :    '+order_date;
            document.getElementById("m_payment_id").innerHTML = ' :    '+payment_id;
            document.getElementById("m_package_id").innerHTML = ' :    '+package_id;
            document.getElementById("m_package_type").innerHTML = ' :    '+package_title;
            document.getElementById("m_round_option").innerHTML = ' :    '+rounded_option;
            document.getElementById("m_spot_option").innerHTML = ' :    '+spot_option;
            document.getElementById("m_status").innerHTML = ' :    '+status;
            document.getElementById("m_amount").innerHTML = ' :    '+amount;
            document.getElementById("m_payment_option_name").innerHTML = ' :    '+payment_option_name;
            document.getElementById("m_tx_id").innerHTML = ' :    '+tx_id;
        })
    </script>--}}


    <script src="/plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="/plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="/plugins/tables/js/datatable-init/datatable-basic.min.js"></script>
@endsection

