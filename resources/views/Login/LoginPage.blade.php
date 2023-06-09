@extends('partial.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h1 class="card-title text-center mb-4">Login Form</h1>
                        <form action="" method="POST" class="needs-validation" novalidate>
                            @csrf
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" id="username" name="username" class="form-control" placeholder="Enter your username" required>
                                <div class="invalid-feedback">Please enter your username.</div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
                                <div class="invalid-feedback">Please enter your password.</div>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-block">Login</button>
                            </div>
                            <div class="text-center mt-3">
                                <a href="#" class="link-forgot-password">Forgot password?</a>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center bg-white">
                        <small>&copy; 2023 Your Company. All rights reserved.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    .card {
        border-radius: 10px;
        border: none;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    .card-title {
        color: #333;
        font-size: 32px;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .form-label {
        font-weight: bold;
        color: #555;
        font-size: 18px;
        margin-bottom: 8px;
    }

    .form-control {
        border-color: #ddd;
        box-shadow: none;
        transition: border-color 0.3s ease-in-out;
        font-size: 16px;
        padding: 12px;
        border-radius: 8px;
        background-color: #f7f7f7;
        color: #333;
    }

    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        font-size: 18px;
        font-weight: bold;
        letter-spacing: 1px;
        padding: 14px 20px;
        transition: background-color 0.3s ease-in-out;
        border-radius: 8px;
        text-transform: uppercase;
    }

    .btn-primary:hover {
        background-color: #0069d9;
        border-color: #0062cc;
    }

    .btn-primary:focus {
        box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
    }

    .card-footer {
        color: #777;
        font-size: 12px;
        background-color: #f7f7f7;
        border-top: none;
        padding: 12px;
    }

    .link-forgot-password {
        text-decoration: none;
        color: #007bff;
        font-size: 14px;
        transition: color 0.3s ease-in-out;
    }

    .link-forgot-password:hover {
        color: #0056b3;
    }
</style>
