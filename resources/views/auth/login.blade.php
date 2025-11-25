<!DOCTYPE html>
<html lang="en">
<x-head title="Login"/>

<body class="bg-white">
<!-- Begin page -->
<div class="account-page">
    <div class="container-fluid p-0">
        <div class="row align-items-center g-0">
            <div class="col-xl-5">
                <div class="row">
                    <div class="col-md-7 mx-auto">
                        <div class="mb-0 border-0 p-md-5 p-lg-0 p-4">
                            <div class="mb-4 p-0">
                                <a href="/" class="auth-logo">
                                    <img src="{{asset('backend/assets/images/logo-dark.png')}}" alt="logo-dark"
                                         class="mx-auto" height="28"/>
                                </a>
                            </div>

                            <div class="pt-0">
                                <form method="POST" action="{{route('login')}}" class="my-4">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label for="email" class="form-label">Email address</label>
                                        <input id="email" class="form-control"  type="email" name="email"  required=""
                                            autofocus placeholder="Enter your email">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input id="password" class="form-control" type="password" name="password" required=""
                                               placeholder="Enter your password">
                                    </div>

                                    <div class="form-group d-flex mb-3">
                                        <div class="col-sm-6">
                                            <div class="form-check">
                                                <input id="remember_me" name="remember" type="checkbox" class="form-check-input"
                                                       checked>
                                                <label class="form-check-label" for="remember_me">Remember
                                                    me</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 text-end">
                                            <a class='text-muted fs-14' href="{{ route('password.request') }}">Forgot
                                                password?</a>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0 row">
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button class="btn btn-primary" type="submit"> Log In</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <div class="saprator my-4"><span>or sign in with</span></div>

                                <div class="text-center text-muted mb-4">
                                    <p class="mb-0">Don't have an account ?<a class='text-primary ms-2 fw-medium'
                                                                              href="{{route('register')}}">Sing up</a>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-7">
                <div class="account-page-bg p-md-5 p-4">
                    <div class="text-center">
                        <h3 class="text-dark mb-3 pera-title">Quick, Effective, and Productive With Tapeli Admin
                            Dashboard</h3>
                        <div class="auth-image">
                            <img src="{{asset('backend/assets/images/authentication.svg')}}" class="mx-auto img-fluid"
                                 alt="images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- END wrapper -->

<x-scripts/>

</body>
</html>
