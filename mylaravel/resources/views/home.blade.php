@extends('layouts.default')

@section('content')
<div class="login-page" style="background: url('your-image-url.jpg') no-repeat center center fixed; background-size: cover;">
    <div class="login-box">
        <div class="login-logo">
            <a href="../index2.html"><b>Admin</b>LTE</a>
        </div>
        <div class="card" style="border-radius: 10px; background: rgba(255, 255, 255, 0.8); backdrop-filter: blur(10px); box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
            <div class="card-body login-card-body">
                <p class="login-box-msg" style="font-size: 18px; color: #333;">Sign in to start your session</p>
                <form action="../index3.html" method="post">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email" required />
                        <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" required />
                        <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                <label class="form-check-label" for="flexCheckDefault"> Remember Me </label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary" style="background-color: #007bff; transition: 0.3s ease-in-out; border-radius: 5px;">Sign In</button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="social-auth-links text-center mb-3 d-grid gap-2">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-primary">
                        <i class="bi bi-facebook me-2"></i> Sign in using Facebook
                    </a>
                    <a href="#" class="btn btn-danger">
                        <i class="bi bi-google me-2"></i> Sign in using Google+
                    </a>
                </div>
                <p class="mb-1"><a href="forgot-password.html">I forgot my password</a></p>
                <p class="mb-0">
                    <a href="register.html" class="text-center"> Register a new membership </a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
