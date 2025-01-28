@extends('layouts.default')

@section('content')
<div class="login-page">
    <div class="login-box">
        <div class="card">
            <div class="card-body login-card-body">
                <h2 class="text-center mb-4">Sign In</h2>
                <form action="../index3.html" method="post">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email" required />
                    </div>
                    <div class="input-group mb-4">
                        <input type="password" class="form-control" placeholder="Password" required />
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn-lg rounded-pill">Sign In</button>
                    </div>
                </form>
                <div class="social-auth-links text-center mt-4">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-primary btn-lg rounded-pill w-100 mb-2">
                        <i class="bi bi-facebook me-2"></i> Sign in with Facebook
                    </a>
                    <a href="#" class="btn btn-danger btn-lg rounded-pill w-100">
                        <i class="bi bi-google me-2"></i> Sign in with Google
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
    body {
        background-color: #f4f6f9;
    }

    .login-page {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .login-box {
        width: 100%;
        max-width: 400px;
        background: #ffffff;
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    }

    .card-body {
        padding: 0;
    }

    .input-group {
        border-radius: 20px;
        overflow: hidden;
    }

    .input-group .form-control {
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 12px;
        font-size: 16px;
    }

    .btn {
        border-radius: 50px;
        padding: 12px;
        font-size: 16px;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .btn:hover {
        background-color: #4e5fff;
        transform: scale(1.05);
    }

    .social-auth-links a {
        text-transform: uppercase;
        font-weight: 500;
    }

    .social-auth-links i {
        font-size: 18px;
    }
</style>
