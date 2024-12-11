@extends('layouts.app')

@section('content')
<div class="d-flex align-items-center justify-content-center" style="min-height: 100vh; background-color: #007bff; margin: 0; padding: 0;">
    <div class="card shadow p-4" style="width: 25rem; border-radius: 10px;">
        <div class="text-center">
            <i class="bi-hexagon-fill mb-3" style="font-size: 2.5rem; color: #007bff;"></i>
            <h3 class="fw-bold">Employee Data Master</h3>
        </div>
        <form method="POST" action="{{ route('login') }}" class="mt-4">
            @csrf

            <div class="form-group mb-3">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter Your Email" required autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-3">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter Your Password" required>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary">
                    <i class="bi-box-arrow-in-right me-2"></i> Log In
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
