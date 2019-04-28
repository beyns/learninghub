@extends('master.index')

@section('content')
<section class="slice slice-lg min-vh-100 d-flex align-items-center bg-section-secondary">
    <div class="container py-5 px-md-0 d-flex align-items-center">
        <div class="w-100">
            <div class="row row-grid justify-content-center justify-content-lg-between align-items-center">
                <div class="col-sm-8 col-lg-6 col-xl-5 order-lg-2">
                    <div class="card shadow zindex-100 mb-0">
                        <div class="card-body px-md-5 py-5">
                            <div class="mb-5">
                                <h6 class="h3">Create account</h6>
                                <p class="text-muted mb-0">Made with love by developers for developers.</p>
                            </div>
                            <span class="clearfix"></span>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group">
                                    <label class="form-control-label">Full name</label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-user"></i></span>
                                        </div>
                                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="form-control-label">Email address</label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-user"></i></span>
                                        </div>
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email">
                                        @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group mb-4">
                                    <label class="form-control-label">Password</label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-key"></i></span>
                                        </div>

                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="new-password">

                                        @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif

                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="far fa-eye"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-4">
                                    <label class="form-control-label">Confirm Password</label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-key"></i></span>
                                        </div>

                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">


                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="far fa-eye"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="my-4">
                                    <div class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" id="check-terms">
                                        <label class="custom-control-label" for="check-terms">I agree to the <a href="#">terms and conditions</a></label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check-privacy">
                                        <label class="custom-control-label" for="check-privacy">I agree to the <a href="#">privacy policy</a></label>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <button type="submit" class="btn btn-sm btn-primary btn-icon rounded-pill">
                                        <span class="btn-inner--text">Create my account</span>
                                        <span class="btn-inner--icon"><i class="far fa-long-arrow-alt-right"></i></span>
                                    </button></div>
                            </form>

                        </div>
                        <div class="card-footer px-md-5"><small>Already have an acocunt?</small>
                            <a href="#" class="small font-weight-bold">Sign in</a></div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1 d-none d-lg-block">
                    <blockquote>
                        <h3 class="h2 mb-4">Keep your face always toward the sunshine - and shadows will fall behind you.</h3>
                        <footer>— <cite class="text-lg">John Sulivan</cite></footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection