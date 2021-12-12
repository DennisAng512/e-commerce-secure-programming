@extends('layouts.template')

@section('title')
    {{ $title }}
@endsection

@section('container')
<div class="login-content">
    <div class="form-container">
        <form action="/register" method="post">
            @csrf
            <div class="my-3 mx-3 row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="name" id="name" value="">
            </div>
            @error('name')
            <div class="col-sm-5">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="my-3 mx-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-5">
                <input type="email" class="form-control" name="email" id="email" value="">
            </div>
            @error('email')
            <div class="col-sm-5">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="my-3 mx-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-5">
                <input type="password" class="form-control" name="password" id="inputPassword">
            </div>
            @error('password')
            <div class="col-sm-5">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="my-3 mx-3 row col-sm-1">
            <button type="submit" class="btn btn-primary mb-3">Register</button>
        </div>
    </form>
</div>
    <small class="invite-text">Already have an account? <a href="/login">Login</a> here!!</small>
</div>
@endsection

