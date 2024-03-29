
@extends('auth.login.login_layout')
@section('page-title')
Login
@endsection
@section('content')
<div class="container" dir="rtl">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align: center; font-weight: bold; color:#FFA500;font-size:x-large;">
                    <label style="color:#4682B4; ">مرحبا بك في   تطبيق   شركة </label>
                    X
                    <br>
                </div>
                <div class="card-body">
                    <p style="font-size: small; text-align: center; font-weight:bold;">تسجيل دخول</p>
                    <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">البريد الالكتروني</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')    
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-end">كلمة المرور</label>
                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @php
                            if (isset($Error )){
                             @endphp
                             <br>
                            <div class="alert alert-danger" role="alert" style="text-align:center;">
                            {{ $Error }}
                            </div>
                            @php
                            }
                            @endphp
                        </div>
                    </div>
                    <div class="row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                            تسجيل دخول
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
