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
            <form class="form-sample" action="{{ route('user.update', $user) }}" method="POST">
                @csrf
                @method('PATCH')

                <p class="card-description font-weight-bold"> Personal info </p>
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">First Name</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="first_name" value="{{ old('first_name', $user->first_name) }}"/> </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Last Name</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="last_name" value="{{ old('last_name', $user->last_name) }}"/> </div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Gender</label>
                        <div class="col-sm-9">
                        <select class="form-control" name="gender">
                            <option value="male" {{ old('gender', $user->gender) == 'Single' ? 'selected' : '' }}>Male</option>
                            <option value="female" {{ old('gender', $user->gender) == 'Single' ? 'selected' : '' }}>Female</option>
                        </select>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Date of Birth</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="yyyy-mm-dd" name="date_of_birth" value="{{ old('date_of_birth', $user->date_of_birth) }}"/> </div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">T.I.N</label>
                        <div class="col-sm-9">
                        <input type="number" class="form-control" name="tin" value="{{ old('tin', $user->tin) }}"/> </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nationality</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="nationality" value="{{ old('nationality', $user->nationality) }}"/> </div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Civil Status</label>
                        <div class="col-sm-9">
                        <select class="form-control" name="civil_status">
                            <option value="Single" {{ old('civil_status', $user->civil_status) == 'Single' ? 'selected' : '' }}>Single</option>
                            <option value="Married" {{ old('civil_status', $user->civil_status) == 'Married' ? 'selected' : '' }}>Married</option>
                            <option value="Separated" {{ old('civil_status', $user->civil_status) == 'Separated' ? 'selected' : '' }}>Separated</option>
                            <option value="Widowed" {{ old('civil_status', $user->civil_status) == 'Widowed' ? 'selected' : '' }}>Widowed</option>
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
                            {{ old('role', $user->roles->first()->name) == "admin" ? 'checked' : '' }}> Admin </label>
                        </div>
                        </div>
                        <div class="col-sm-5">
                        <div class="form-radio">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="role" id="client" value="client"
                            {{ old('role', $user->roles->first()->name) == "client" ? 'checked' : '' }}> Client </label>
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
                        <input type="email" class="form-control" name="email" value="{{ old('email', $user->email) }}"/> </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Contact No.</label>
                        <div class="col-sm-9">
                        <input type="number" class="form-control" name="contact_no" value="{{ old('contact_no', $user->contact_no) }}"/> </div>
                    </div>
                    </div>
                </div>
                <hr>
                <p class="card-description font-weight-bold"> Address </p>
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Address 1</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="address_1" value="{{ old('address_1', $user->address_1) }}"/> </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">State</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="state" value="{{ old('state', $user->state) }}"/> </div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Address 2</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="address_2" value="{{ old('address_2', $user->address_2) }}"/> </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Postcode</label>
                        <div class="col-sm-9">
                        <input type="number" class="form-control" name="postcode" value="{{ old('postcode', $user->postal_code) }}"/> </div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">City</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="city" value="{{ old('city', $user->city) }}"/> </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Country</label>
                        <div class="col-sm-9">
                        <select class="form-control" name="country">
                            @foreach($countrys as $country)
                                <option value="{{ $country['alpha3Code'] }}"
                                {{ old('country', $user->country_code) == $country['alpha3Code'] ? 'selected' : '' }}
                                >{{ $country['name'] }}</option>
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
</x-custom-layout>
