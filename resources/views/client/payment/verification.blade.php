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
          <div class="col-md-8 mx-auto">
              <div class="row mb-5">
                  <div class="col-md-8 mx-auto">
                        <h4>Reference Number:</h4>
                        <h3>{{ $deposit->checkout->reference_no }}</h3>
                      <p class="font-weight-light"> Please enter the details of your deposit payment below. Failure to provide accurate info may delay processing. Keep your deposit slip for at least a week in case there is a need for us to validate it. </p>
                  </div>
              </div>
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="m-2">
                  <div class="card card-icon-top">
                    <div class="card-body">
                      <h4>Confirm your deposit</h4>
                        <form class="form-sample" action="{{ route('deposit.upload.process', $deposit) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                            <p class="card-text">Please make sure that all info is correct to prevent delays.</p>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Bank Name</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" name="bank_name" value="{{ old('bank_name', $deposit->bank_name) }}" autocomplete="off" required/> </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Account No. Deposited</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" name="account_no" value="{{ old('account_no', $deposit->account_no) }}" autocomplete="off" required/> </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Date</label>
                                <div class="col-sm-9">
                                    <div id="datepicker-popup" class="input-group date datepicker">
                                        <input type="text" class="form-control" name="date" autocomplete="off" required>
                                        <span class="input-group-addon input-group-append border-left">
                                          <span class="mdi mdi-calendar input-group-text"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Time</label>
                                <div class="col-sm-9">
                                    <div class="input-group date" id="timepicker-example" data-target-input="nearest">
                                        <div class="input-group" data-target="#timepicker-example" data-toggle="datetimepicker">
                                          <input type="text" class="form-control datetimepicker-input" name="time" data-target="#timepicker-example" autocomplete="off" required/>
                                          <div class="input-group-addon input-group-append">
                                            <i class="mdi mdi-clock input-group-text"></i>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Deposit Code</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" name="deposit_code" value="{{ old('deposit_code') }}" autocomplete="off" required/> </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Amount Paid</label>
                                <div class="col-sm-9">
                                <input type="number" class="form-control" name="amount_paid" value="{{ old('amount_paid') }}" autocomplete="off" required/> </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Proof of Payment</label>
                                <div class="col-sm-9">
                                    <small>Scan or take a picture of the deposit slip and click Upload.</small>
                                    <input type="file" class="dropify" name="image" value="{{ old('image') }}" required/>
                                </div>
                            </div>
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
