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
                                    <h3 class="h2 mb-0 text-gray-800 text-primary font-weight-bold">Unverified Station Owners</h3>
                                @else
                                    <h3 class="h2 mb-0 text-gray-800 text-danger">No Station Owner has registered yet</h3>
                                @endif
                                {{--<button type="button" class="d-none d-sm-inline-block btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#create_station_modal"><i class="fas fa-hourglass-start"></i>
                                    Add Station Owner
                                </button>--}}

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
                                                    <th class="border-top-0">Owner</th>
                                                    <th class="border-top-0">Email</th>
                                                    <th class="border-top-0">Phone</th>
                                                    <th class="border-top-0">Address</th>
                                                    <th class="border-top-0">Status</th>
                                                    <th class="border-top-0">Add Station</th>
                                                    <th class="border-top-0">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($data['data'] as $all)
                                                    <tr>
                                                        <td><img src="{{ $all->photo_url != null ? url('storage'.$all->photo_url):'/assets/img/null/avatar.jpg'}}" class=" rounded-circle mr-3" alt="" style="height: 40px; width: 40px">{{$all->name}}</td>
                                                        <td>{{$all->email}}</td>
                                                        <td>{{$all->phone}}</td>
                                                        <td>{{$all->address}}</td>
                                                        <td>
                                                            @if(!$all->verified)
                                                                Not Verified
                                                            @else
                                                                Verified
                                                            @endif
                                                        </td>
                                                        <td class="text-center align-middle">
                                                            <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#create_station_modal" data-owner_id="{{$all->id}}">Add Station</button>
                                                        </td>
                                                        <td class="text-center align-middle">
                                                            <form action="/verify_station_owner" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="owner_id" value="{{$all->id}}">
                                                                <button type="submit" class="btn btn-sm btn-warning">Verify</button>
                                                            </form>
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
                        <input type="hidden" name="owner_id" id="owner_id" value="">
                        <input type="hidden" name="from" id="from" value="uso">
                        {{-------------------------- Title ---------------------}}
                        <div class="form-group row">
                            <label for="station_name" class="col-md-4 col-form-label text-md-right">{{ __('Station Name') }}</label>

                            <div class="col-md-6">
                                <input id="station_name" type="text" class="form-control" name="station_name" value="{{ old('station_name') }}"  autocomplete="station_name" autofocus >
                            </div>
                        </div>


                        {{-------------------------- Station Email ---------------------}}
                        <div class="form-group row">
                            <label for="station_email" class="col-md-4 col-form-label text-md-right">{{ __('Station Email') }}</label>

                            <div class="col-md-6">
                                <input id="station_email" type="text" class="form-control" name="station_email" value="{{ old('station_email') }}"  autocomplete="station_email" autofocus >
                            </div>
                        </div>


                        {{-------------------------- Station Phone ---------------------}}
                        <div class="form-group row">
                            <label for="station_phone" class="col-md-4 col-form-label text-md-right">{{ __('Station Phone') }}</label>

                            <div class="col-md-6">
                                <input id="station_phone" type="number" class="form-control" name="station_phone" value="{{ old('station_phone') }}"  autocomplete="station_phone" autofocus >
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
                                    <option value="Up Comming">Up Comming</option>
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
                                <input id="station_address" type="text" class="form-control" name="station_address" value="{{ old('station_address') }}"  autocomplete="station_address" autofocus >
                            </div>
                        </div>






                        {{-------------------------- Station Contact Person Name ---------------------}}
                        <div class="form-group row">
                            <label for="contact_person_name" class="col-md-4 col-form-label text-md-right">{{ __('Contact Person Name') }}</label>

                            <div class="col-md-6">
                                <input id="contact_person_name" type="text" class="form-control" name="contact_person_name" value="{{ old('contact_person_name') }}"  autocomplete="contact_person_name" autofocus >
                            </div>
                        </div>



                        {{-------------------------- Station Contact Person Number ---------------------}}
                        <div class="form-group row">
                            <label for="contact_person_phone" class="col-md-4 col-form-label text-md-right">{{ __('Contact Person Phone') }}</label>

                            <div class="col-md-6">
                                <input id="contact_person_phone" type="number" class="form-control" name="contact_person_phone" value="{{ old('contact_person_phone') }}"  autocomplete="contact_person_phone" autofocus >
                            </div>
                        </div>


                        {{-------------------------- Station Journey Date ---------------------}}
                        <div class="form-group row">
                            <label for="starting_date" class="col-md-4 col-form-label text-md-right">{{ __('starting_date') }}</label>

                            <div class="col-md-6">
                                <input id="starting_date" type="date" class="form-control" name="starting_date" value="{{ old('starting_date') }}"  autocomplete="starting_date" autofocus >
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

    <script>
        $('#create_station_modal').on('show.bs.modal', function (event) {

            var button = $(event.relatedTarget)
            var owner_id = button.data('owner_id')
            var modal = $(this)

            console.log('')


            modal.find('.modal-body #owner_id').val(owner_id)
        })
    </script>


    <script src="/plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="/plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="/plugins/tables/js/datatable-init/datatable-basic.min.js"></script>
@endsection

