<x-blank-layout>

    @section('css')
        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="{{ asset('assets/vendors/dropzone/dropzone.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-bar-rating/bars-1to10.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-bar-rating/bars-horizontal.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-bar-rating/bars-movie.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-bar-rating/bars-pill.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-bar-rating/bars-reversed.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-bar-rating/bars-square.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-bar-rating/bootstrap-stars.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-bar-rating/css-stars.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-bar-rating/examples.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-bar-rating/fontawesome-stars-o.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-bar-rating/fontawesome-stars.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-asColorPicker/css/asColorPicker.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/x-editable/bootstrap-editable.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/dropify/dropify.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-file-upload/uploadfile.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-tags-input/jquery.tagsinput.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.min.css') }}">
        <!-- End Plugin css for this page -->
    @endsection

    <div class="container-fluid middle-section bg-white">
        <div class="row">
          <div class="col-md-10 mx-auto">
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="m-2">
                  <div class="card card-icon-top">
                    <div class="card-body">
                        @if($errors->any())
                            @foreach ($errors->all() as $error)
                                <ul>
                                    <li>{{ $error }}</li>
                                </ul>
                            @endforeach
                        @endif
                      <h4>Application Form</h4>
                        <form class="form-sample" action="{{ route('reserve.create') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <p class="card-text">Please make sure that all info is correct to prevent delays.</p>
                            <p class="card-description font-weight-bold"> Personal info </p>
                            <div class="row">
                                <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">First Name</label>
                                    <div class="col-sm-9">
                                    <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}"/> </div>
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Last Name</label>
                                    <div class="col-sm-9">
                                    <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}"/> </div>
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Gender</label>
                                    <div class="col-sm-9">
                                    <select class="form-control" name="gender">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Date of Birth</label>
                                    <div class="col-sm-9">
                                    <input type="date" class="form-control" placeholder="dd/mm/yyyy" name="date_of_birth" value="{{ old('date_of_birth' )}}"/> </div>
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">T.I.N</label>
                                    <div class="col-sm-9">
                                    <input type="number" class="form-control" name="tin" value="{{ old('tin') }}"/> </div>
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nationality</label>
                                    <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nationality" value="{{ old('nationality') }}"/> </div>
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Civil Status</label>
                                    <div class="col-sm-9">
                                    <select class="form-control" name="civil_status">
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                        <option value="Separated">Separated</option>
                                        <option value="Widowed">Widowed</option>
                                    </select>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <hr>
                            <p class="card-description font-weight-bold"> Contact info </p>
                            <div class="row">
                                <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}"/> </div>
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Contact No.</label>
                                    <div class="col-sm-9">
                                    <input type="number" class="form-control" name="contact_no" value="{{ old('contact_no') }}"/> </div>
                                </div>
                                </div>
                            </div>
                            <hr>
                            <p class="card-description font-weight-bold"> Permanent Address </p>
                            <div class="row">
                                <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Address 1</label>
                                    <div class="col-sm-9">
                                    <input type="text" class="form-control" id="perma_address_1" name="perma_address_1" value="{{ old('address_1') }}"/> </div>
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">State</label>
                                    <div class="col-sm-9">
                                    <input type="text" class="form-control" id="perma_state" name="perma_state" value="{{ old('state') }}"/> </div>
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Address 2</label>
                                    <div class="col-sm-9">
                                    <input type="text" class="form-control" id="perma_address_2" name="perma_address_2" value="{{ old('address_2') }}"/> </div>
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Postcode</label>
                                    <div class="col-sm-9">
                                    <input type="number" class="form-control" id="perma_postcode" name="perma_postcode" value="{{ old('postcode') }}"/> </div>
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">City</label>
                                    <div class="col-sm-9">
                                    <input type="text" class="form-control" id="perma_city" name="perma_city" value="{{ old('city') }}"/> </div>
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Country</label>
                                        <div class="col-sm-9">
                                        <select class="form-control" name="perma_country" id="perma_country">
                                            @foreach($countrys as $country)
                                                <option value="{{ $country['alpha3Code'] }}">{{ $country['name'] }}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="card-description font-weight-bold"> Preset Address </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" id="same" name="same_as_permanent_address" onchange="fillPresentAddress()">
                                                        Same as permanent address
                                                    <i class="input-helper"></i>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Address 1</label>
                                    <div class="col-sm-9">
                                    <input type="text" class="form-control" id="pres_address_1" name="pres_address_1" value="{{ old('address_1') }}"/> </div>
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">State</label>
                                    <div class="col-sm-9">
                                    <input type="text" class="form-control" id="pres_state" name="pres_state" value="{{ old('state') }}"/> </div>
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Address 2</label>
                                    <div class="col-sm-9">
                                    <input type="text" class="form-control" id="pres_address_2" name="pres_address_2" value="{{ old('address_2') }}"/> </div>
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Postcode</label>
                                    <div class="col-sm-9">
                                    <input type="number" class="form-control" id="pres_postcode" name="pres_postcode" value="{{ old('postcode') }}"/> </div>
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">City</label>
                                    <div class="col-sm-9">
                                    <input type="text" class="form-control" id="pres_city" name="pres_city" value="{{ old('city') }}"/> </div>
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Country</label>
                                        <div class="col-sm-9">
                                        <select class="form-control" name="pres_country" id="pres_country">
                                            @foreach($countrys as $country)
                                                <option value="{{ $country['alpha3Code'] }}">{{ $country['name'] }}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="card-text">Note: Additional documents may be required to process the reservation.</p>
                            <div class="row mt-2">
                                <button type="submit" class="btn btn-secondary btn-fw">
                                    <i class="mdi mdi-file-document"></i>Submit</button>
                            </div>
                        </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

    @section('script')

    <script>
        function fillPresentAddress() {
            if (document.getElementById(
              "same").checked) {
                document.getElementById("pres_address_1").value = document.getElementById("perma_address_1").value;
                document.getElementById("pres_state").value = document.getElementById("perma_state").value;
                document.getElementById("pres_address_2").value = document.getElementById("perma_address_2").value;
                document.getElementById("pres_postcode").value = document.getElementById("perma_postcode").value;
                document.getElementById("pres_city").value = document.getElementById("perma_city").value;
                document.getElementById("pres_country").value = document.getElementById("perma_country").value;

            } else {
                document.getElementById("pres_address_1").value = "";
                document.getElementById("pres_state").value = "";
                document.getElementById("pres_address_2").value = "";
                document.getElementById("pres_postcode").value = "";
                document.getElementById("pres_city").value = "";
                document.getElementById("pres_country").value = "AFG";
            }
        }
    </script>

    <!-- Plugin js for this page -->
    <script src="{{ asset('assets/vendors/jquery-bar-rating/jquery.barrating.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-asColor/jquery-asColor.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-asGradient/jquery-asGradient.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-asColorPicker/jquery-asColorPicker.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/x-editable/bootstrap-editable.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/dropify/dropify.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-file-upload/jquery.uploadfile.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-tags-input/jquery.tagsinput.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/dropzone/dropzone.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery.repeater/jquery.repeater.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/inputmask/jquery.inputmask.bundle.js') }}"></script>
    <!-- End plugin js for this page -->

    <!-- Custom js for this page -->
    <script src="{{ asset('assets/js/shared/formpickers.js') }}"></script>
    <script src="{{ asset('assets/js/shared/form-addons.js') }}"></script>
    <script src="{{ asset('assets/js/shared/x-editable.js') }}"></script>
    <script src="{{ asset('assets/js/shared/inputmask.js') }}"></script>
    <script src="{{ asset('assets/js/shared/dropify.js') }}"></script>
    <script src="{{ asset('assets/js/shared/dropzone.js') }}"></script>
    <script src="{{ asset('assets/js/shared/jquery-file-upload.js') }}"></script>
    <script src="{{ asset('assets/js/shared/form-repeater.js') }}"></script>
    <!-- End custom js for this page -->
    @endsection
</x-blank-layout>
