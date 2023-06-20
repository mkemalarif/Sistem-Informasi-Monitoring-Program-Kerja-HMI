@extends('partial.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h1 class="card-title text-center mb-4">Login Form</h1>
                        @if (session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        <form action="{{ route('login') }}" method="POST" class="needs-validation" novalidate>
                            @csrf
                            <div class="mb-3 shadow-sm">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" id="username" name="username" class="form-control" placeholder="Enter your username" required value="{{ old('username') }}">
                                <div class="invalid-feedback">Please enter your username.</div>
                            </div>
                            <div class="mb-3 shadow-sm">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
                                <div class="invalid-feedback">Please enter your password.</div>
                            </div>
                            <div class="d-grid shadow-sm">
                                <button type="submit" class="btn btn-primary btn-block">Login</button>
                            </div>
                            <div class="text-center mt-3">
                                <a href="#" class="link-forgot-password">Forgot password?</a>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center bg-white">
                        <small>&copy; 2023 Himpunan Mahasiswa Makassar. All rights reserved.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @if (session('error'))
        <script>
            window.onload = function() {
                alert("{{ session('error') }}");
            }
        </script>
    @endif
@endsection
