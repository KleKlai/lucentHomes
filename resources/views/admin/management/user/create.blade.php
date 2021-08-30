<x-custom-layout>

    <div class="col-12 grid-margin">

        @if ($errors->any())
            <div class="alert alert-fill-danger" role="alert">
                <i class="mdi mdi-alert-circle"></i> Oh snap! Change a few things up and try save again.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card">
          <div class="card-body">
            {{--  <h4 class="card-title">On-Boarding</h4>  --}}
            <form class="form-sample" action="{{ route('user.store') }}" method="POST">
                @csrf

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
                        <input type="text" class="form-control" name="last_name" value="{{ old('lastt_name') }}"/> </div>
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
                    <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Membership</label>
                        <div class="col-sm-4">
                        <div class="form-radio">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="role" id="admin" value="admin"
                            {{ old('role') == "admin" ? 'checked' : '' }}> Admin </label>
                        </div>
                        </div>
                        <div class="col-sm-5">
                        <div class="form-radio">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="role" id="client" value="client"
                            {{ old('role', 'checked') == "client" ? 'checked' : '' }}> Client </label>
                        </div>
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
                <div class="row mt-2">
                    <button type="submit" class="btn btn-secondary btn-fw">
                        <i class="mdi mdi-file-document"></i>Save</button>
                </div>
            </form>
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
    @endsection
</x-custom-layout>
