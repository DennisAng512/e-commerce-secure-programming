@extends('layouts.template')

@section('title')
    {{ $title }}
@endsection

@section('container')
<div class="">
    @if(session()->has('success'))
    <small>{{ session('success') }}</small>
    @endif
    @if(session()->has('error'))
    <small>{{ session('error') }}</small>
    @endif
    @error('email')
    <small>Login Failed</small>
    @enderror
    @error('password')
    <small>Login Failed</small>
    @enderror
</div>
    <div class="login-content">
        <div class="form-container">
            <form action="/login" method="post">
                @csrf
                <div class="my-3 mx-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="email" id="email" value="">
                    </div>
                </div>
                <div class="my-3 mx-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-5">
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                </div>
                <div class="my-3 mx-3 row col-sm-1">
                    <button type="submit" class="btn btn-primary mb-3">Login</button>
                </div>
            </form>
        </div>
        <small class="invite-text">Don't have an account? <a href="/register">Register</a> now!!</small>
    </div>
@endsection
    
