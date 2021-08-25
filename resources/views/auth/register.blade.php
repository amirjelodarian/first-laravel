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
            <form method="post" action="{{ route('register.store') }}">
                @csrf
                <div class="col-md-12 col-lg-12">
                    <div class="form-group col-md-6 firstname">
                        <label for="firstname">نام</label>
                        <input type="text" placeholder="نام" class="form-control" name="firstname" id="firstname" value="{{ old('firstname') }}" />
                    </div>

                    <div class="form-group col-md-6">
                        <label for="lastname">نام خانوادگی</label>
                        <input type="text" placeholder="نام خانوادگی" class="form-control" name="lastname" id="lastname" value="{{ old('lastname') }}" />
                    </div>

                    <div class="form-group col-md-6">
                        <label for="zip">کد پستی</label>
                        <input type="text" placeholder="کد پستی" class="form-control" name="zip" id="zip" value="{{ old('zip') }}" />
                    </div>

                    <div class="form-group col-md-6">
                        <label for="phone">شماره تلفن</label>
                        <input type="text" placeholder="شماره تلفن" class="form-control" name="phone" id="phone" value="{{ old('phone') }}" />
                    </div>

                    <div class="form-group col-md-6 password">
                        <label for="password">رمز</label>
                        <input type="password" placeholder="رمز" class="form-control" name="password" id="password" value="{{ old('password') }}" />
                    </div>
                    <div class="form-group col-md-6">
                        <label for="password_confirmation">تکرار رمز</label>
                        <input type="password" placeholder="تکرار رمز" class="form-control" name="password_confirmation" id="password_confirmation" value="{{ old('password_confirmation') }}" />
                    </div>
                    <div class="form-group col-md-6 state">
                        <label for="state">استان</label>
                        <select name="state" id="state" class="form-control">
                            <option value="0">استان را انتخاب کنید -</option>
                            @foreach($states as $state)
                                <option value="{{ $state->name }}">{{ $state->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="city">شهر</label>
                        <input type="text" placeholder="شهر" class="form-control" name="city" id="city" value="{{ old('city') }}" />
                    </div>

                    <div class="form-group col-md-12">
                        <label for="address">آدرس دقیق</label>
                        <textarea class="form-control" placeholder="آدرس دقیق" name="address" id="address" rows="10">{{ old('address') }}</textarea>
                    </div>
                    <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-primary">ثبت نام</button>
                    </div>
                    <a href="{{ route('login') }}">حسابی دارید ؟ وارد شوید</a>
                </div>

            </form>
        </div>
        <div class="col-md-3 col-lg-3"></div>
@stop
