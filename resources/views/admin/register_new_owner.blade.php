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
                        <form method="POST" action="/register_new_station_owner">
                            @csrf
                            <h3 class="text-center font-weight-bold text-primary mt-3 mb-4">Register a New Station Owner</h3>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            {{--------------------------------- Email  ---------------------------}}

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            {{--------------------------------- Phone  ---------------------------}}

                            <div class="form-group row">
                                <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                                <div class="col-md-6">
                                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>


                            {{--   Address ------------------------}}
                            <div class="form-group row">
                                <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                                <div class="col-md-6">
                                    <input id="address" type="address" class="form-control @error('address') is-invalid @enderror" name="address" required autocomplete="address">

                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
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
                    <form method="POST" action="/add_new_station">
                        @csrf

                        {{-------------------------- Form Fields ---------------------}}
                        <input type="hidden" name="owner_id" value="">
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

