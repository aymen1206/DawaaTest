@extends('layouts.adminapp')
@section('content')
<div class="container card">
    <h3 style="text-align: center; margin-top: 20px">تعديل بيانات    العميل    {{$user->name}}</h3>
    <hr>
    <form class="row" method="POST" action="{{route('client.Edition')}}" enctype="multipart/form-data">
    @csrf
    <div class="col-md-6">
        <div class="form-group icon-form">
            <div class="form-ic">
                <i class="ti ti-user"></i>
            </div>
            <div class="form-inp">
                <input type="text" name="userid" class="form-control normal-text" placeholder="إسم  السائق" value="{{$user->id}}" hidden readonly>
                <input type="text" name="name" class="form-control normal-text" placeholder="إسم  السائق" value="{{$user->name}}">
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group icon-form">
            <div class="form-ic">
                <i class="ti ti-mobile"></i>
            </div>
            <div class="form-inp">
                <input type="text" name="ph" class="form-control" placeholder="رقم الهاتف"   value="{{$user->phone}}">
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group icon-form">
            <div class="form-ic">
                <i class="ti ti-location-pin"></i>
            </div>
            <div class="form-inp">
                <input type="text" name="address" class="form-control normal-text" placeholder="عنوان السكن"  value="{{$user->address}}">
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group icon-form">
            <div class="form-ic">
                <i class="ti ti-email"></i>
            </div>
            <div class="form-inp">
                <input type="email" name="ema" class="form-control normal-text" placeholder="لبريد الالكتروني" value="{{$user->email}}">
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
    <div class="col-md-12">
        <div class="form-group px-3">
            <input type="submit" class="btn btn-success no-btn-success" value="حفظ البيانات">
        </div>
    </div>
</div>
</form>
</div>
@endsection
