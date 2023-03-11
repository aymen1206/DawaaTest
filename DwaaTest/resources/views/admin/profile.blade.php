@extends('layouts.adminapp')
@section('content')
<div class="  container card">
    <br>
   <form class="row" method="POST" action="{{route('admin.profile.update')}}" enctype="multipart/form-data">
    @csrf
        <div class="col-md-6">
            <div class="form-group icon-form">
                <div class="form-ic">
                    <i class="ti ti-user"></i>
                </div>
                <div class="form-inp">
                    <input type="text" name="name" class="form-control normal-text" placeholder="إسم  المدير" value="{{$user->name}}">
                    <input type="text" name="id" class="form-control normal-text" value="{{$user->id}}" hidden readonly>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group icon-form">
                <div class="form-ic">
                    <i class="ti ti-mobile"></i>
                </div>
                <div class="form-inp">
                    <input type="text" name="ph" class="form-control"
                     id="inputPhone" pattern="^(05|5)(5|0|3|6|4|9|1|8|7)([0-9]{7})$" placeholder="رقم الهاتف   50********" value="{{$user->phone}}">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group icon-form">
                <div class="form-ic">
                    <i class="ti ti-location-pin"></i>
                </div>
                <div class="form-inp">
                    <input type="text" name="address" class="form-control normal-text" placeholder="عنوان المدير "  value="{{$user->address}}">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group icon-form">
                <div class="form-ic">
                    <i class="ti ti-email"></i>
                </div>
                <div class="form-inp">
                    <input type="email" name="ema" class="form-control normal-text" placeholder="لبريد الالكتروني" value="{{$user->email}}" readonly>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group icon-form">
                <div class="form-ic">
                    <i class="ti ti-lock"></i>
                </div>
                <div class="form-inp">
                    <input type="text" name="pw" class="form-control normal-text" placeholder="************" value="">
                </div>
            </div>
        </div>
        @php
            if($alert=='done'){
        @endphp
        <div class="col-md-12">
            <div class="alert alert-success" role="alert" style="text-align: center">
                تم تعديل بيانات المدير
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
