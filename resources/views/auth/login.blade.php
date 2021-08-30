<x-authentication-layout>
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <div class="auto-form-wrapper">
                <form method="POST" action="{{ route('login') }}">
                  @csrf
                  <div class="form-group">
                    <label class="label">Email</label>
                    <div class="input-group">
                      <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="label">Password</label>
                    <div class="input-group">
                      <input type="password" class="form-control" name="password" placeholder="*********">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary submit-btn btn-block">Login</button>
                  </div>
                  <div class="form-group d-flex justify-content-between">
                    <div class="form-check form-check-flat mt-0">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" checked> Keep me signed in </label>
                    </div>
                    <a href="#" class="text-small forgot-password text-black">Forgot Password</a>
                  </div>
                </form>
              </div>
              <ul class="auth-footer">
                <li>
                  <a href="#">Help</a>
                </li>
                <li>
                  <a href="#">Terms</a>
                </li>
              </ul>
              <p class="footer-text text-center">Lucent Homes © {{ date('Y') }}. All rights reserved.</p>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
    </div>

    {{-- <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper auth p-0 theme-two">
        <div class="row d-flex align-items-stretch">
            <div class="col-md-4 banner-section d-none d-md-flex align-items-stretch justify-content-center">
            <div class="slide-content bg-1"> </div>
            </div>
            <div class="col-12 col-md-8 h-100 bg-white">
                <div class="auto-form-wrapper d-flex align-items-center justify-content-center flex-column">
                    <div class="nav-get-started">
                    <p>{{ "Don't have an account?" }}</p>
                    <a class="btn get-started-btn" href="{{ route('register') }}">GET STARTED</a>
                    </div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <h3 class="mr-auto">{{ "Hello! let's get started" }}</h3>
                        <p class="mb-5 mr-auto">Enter your details below.</p>

                        <x-jet-validation-errors class="mb-4" />

                        <div class="form-group">
                            <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                <i class="mdi mdi-account-outline"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" name="username" placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                <i class="mdi mdi-lock-outline"></i>
                                </span>
                            </div>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary submit-btn">SIGN IN</button>
                        </div>
                        <div class="wrapper mt-5 text-gray">
                            <p class="footer-text">Copyright © {{ date('Y') }} KuraLMS. All rights reserved.</p>
                            <ul class="auth-footer text-gray">
                            <li>
                                <a href="#">Terms & Conditions</a>
                            </li>
                            <li>
                                <a href="#">Cookie Policy</a>
                            </li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        <!-- content-wrapper ends -->
    </div> --}}
</x-authentication-layout>
