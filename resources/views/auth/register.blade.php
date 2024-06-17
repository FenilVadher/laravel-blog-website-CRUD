@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #FFEDD8;
        font-family: 'Roboto', sans-serif;
    }

    .container {
        margin-top: 50px;
    }

    .card {
        border-radius: 1rem;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        border-top-left-radius: 1rem;
        border-top-right-radius: 1rem;
        font-size: 1.5rem;
        font-weight: bold;
        background-color: #219C90;
        color: #ffffff;
        text-align: center;
        padding: 1rem 0;
    }

    .card-body {
        padding: 2rem;
        background-color: #EEEEEE;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-control {
        border-radius: 0.5rem;
        border: 1px solid #ced4da;
        transition: border-color 0.3s;
        padding: 0.75rem;
        border-color: #124076;

    }

    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.25);
    }

    .btn-primary {
        border-radius: 0.5rem;
        background-color: #219C90;
        border-color: #891652;
        transition: background-color 0.3s, border-color 0.3s;
        padding: 0.75rem;
        font-size: 1rem;
    }

    .btn-primary:hover {
        background-color: #9B4444;
        border-color: #124076;
    }

    .form-group label {
        font-weight: bold;
    }

    .form-group .col-md-6 {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .invalid-feedback {
        font-size: 0.875rem;
    }

    .form-group input {
        text-align: center;
    }
</style>

<div class="container d-flex justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Register') }}</div>
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary w-100">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection