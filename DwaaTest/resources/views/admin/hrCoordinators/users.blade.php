@extends('layouts.adminapp')

@section('content')
    <div class="container card">
        <br>
        <form class="row" method="POST" action="{{route('user.store')}}" enctype="multipart/form-data">
        @csrf
            <div class="col-md-6">
                <div class="form-group icon-form">
                    <div class="form-ic">
                        <i class="ti ti-user"></i>
                    </div>
                    <div class="form-inp">
                        <input type="text" name="name" class="form-control normal-text" placeholder="إسم  الموظف" required>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group icon-form">
                    <div class="form-ic">
                        <i class="ti ti-mobile"></i>
                    </div>
                    <div class="form-inp">
                        <input type="text" name="ph" class="form-control" id="inputPhone" pattern="^(05|5)(5|0|3|6|4|9|1|8|7)([0-9]{7})$" placeholder="رقم الهاتف   50********" required>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group icon-form">
                    <div class="form-ic">
                        <i class="ti ti-location-pin"></i>
                    </div>
                    <div class="form-inp">
                        <input type="text" name="address" class="form-control normal-text" placeholder="عنوان السكن" required>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group icon-form">
                    <div class="form-ic">
                        <i class="ti ti-email"></i>
                    </div>
                    <div class="form-inp">
                        <input type="email" name="ema" class="form-control normal-text" placeholder="لبريد الالكتروني" required>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group icon-form">
                    <div class="form-ic">
                        <i class="ti ti-lock"></i>
                    </div>
                    <div class="form-inp">
                        <input type="text" name="pw" class="form-control normal-text" placeholder="كلمة المرور" required>
                    </div>
                </div>
            </div>

            @php
            if($alert=='done'){
            @endphp

            <div class="col-md-12">
                <div class="alert alert-success" role="alert" style="text-align: center">
                    تم اضافة  منسق الموارد البشرية بنجاح
                </div>
            </div>      
            @php    
            }
            if($alert=='emailDeplicated'){
            @endphp

            <div class="col-md-12">
                <div class="alert alert-danger" role="alert" style="text-align: center">
                    عذرا البريد الالكتروني مسجل مسبقا
                </div>
            </div>      
            @php    
            }
            @endphp
            <div class="col-md-12">
                <div class="form-group px-3">
                    <input type="submit" class="btn btn-success no-btn-success" value="حفظ البيانات">
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
