<div class="container">
    <div class="row g-0">
        <div class="col-lg-10 offset-lg-1">
            <div class="row g-0">
                <div class="col-lg-6">
                    <div class="login_area_left_wrapper">
                        <div class="login_logo_area">
                            <img src="assets/img/logo/logo-login.png" alt="">
                            <p>Nulla laborum sit voluptate anim in. Nulla ut qui ex
                                ipsum id aliqua amet exercitation. Anim ididunt
                                anim anim voluptate enim.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login_area_right_wrapper">
                        <div class="login_area_right_heading">
                            <h4>Welcome Back!</h4>
                            <p>Sign in to continue to <a href="#!">AndShop</a></p>
                        </div>
                        <div class="login_form_wrapper">
                            <form action="{{ route('admin.login') }}" method="POST">
                                @csrf
                                <div class="d-flex align-items-center mb-3 pb-1">
                                    <span class="h1 fw-bold mx-auto">Login Form</span>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="email-address">Email address</label>
                                    <input type="email" id="email-address"
                                        class="form-control @error('email') is-invalid @enderror" name="email" />
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="password">Password</label>
                                    <input type="password" id="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password" />
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="pt-1 mb-4 d-flex justify-content-center">
                                    <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
