@extends('auth.login.login_layout')
@section('page-title')
Registration
@endsection
@section('content')
<div class="container" dir="rtl">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">   
                <div class="card-header" style="text-align: center; font-weight: bold; color:#FFA500;font-size:x-large;">
                    <label style="color:#4682B4; ">مرحبا بك في  شركة </label>
                    X
                    <br>
                </div>
                <div class="card-body">
                    <p style="font-size: small; text-align: center; font-weight:bold;">إنشاء حساب جديد</p>
                    <form method="POST" action="{{ route('register') }}" style="text-align: right;">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name" class="col-md-12 col-form-label text-md-end">الاسم</label>
                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="col-md-12 col-form-label text-md-end">البريد الاكتروني</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="password" class="col-md-12 col-form-label text-md-end">كلمة المرور</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="password-confirm" class="col-md-12 col-form-label text-md-end">تاكيد كلمة المرور</label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="password-confirm" class="col-md-12 col-form-label text-md-end">رقم الهاتف</label>
                            <div class="col-md-12">
                                <input id="password-confirm" type="text" class="form-control" name="phone" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="password-confirm" class="col-md-12 col-form-label text-md-end">العنوان</label>
                            <div class="col-md-12">
                                <input id="password-confirm" type="text" class="form-control" name="address" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <br>
                            <p style="text-align: center; font-weight: bold; font-size: large;">  هل تريد؟ <a href="{{ route('login') }}">تسجيل دخول</a></p>
                        </div>
                    </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                تسجيل
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
