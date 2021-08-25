@extends('layout')
@section('main')
    <div class="col-md-3 col-lg-3"></div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 register-form">
        <br />

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="post" action="{{ route('login.store') }}">
            @csrf
            <div class="col-md-12 col-lg-12">
                <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 password login-inputs">
                    <label for="phone">شماره تلفن</label>
                    <input type="text" placeholder="شماره تلفن" class="form-control" name="phone" id="phone" value="{{ old('phone') }}" />
                </div>

                <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 login-inputs">
                    <label for="password">رمز</label>
                    <input type="password" placeholder="رمز" class="form-control" name="password" id="password" value="{{ old('password') }}" />
                </div>
                <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-primary">ورود</button>
                </div>
                <a href="{{ route('forgetPasswordForm') }}">رمز خود را فراموش کرده اید ؟</a>
            </div>

        </form>
    </div>
    <div class="col-md-3 col-lg-3"></div>
@stop
