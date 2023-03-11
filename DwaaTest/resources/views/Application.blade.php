@extends('layouts.Xclient')
@section('content')
@php
    use App\Models\Gender;
    use App\Models\Nationality;
@endphp
<div class="container">
<form class="row" method="POST" action="{{route('App.submit')}}" enctype="multipart/form-data">
@csrf
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">اسم مقدم الطلب</label>
    <input type="text" class="form-control" name="name" required>
  </div>
  <div class="col-md-6">
    <label for="inputAddress" class="form-label">تاريخ الميلاد</label>
    <input type="date" class="form-control" name="DOB" required>
  </div>
    <div class="col-md-6">
        <label for="inputAddress" class="form-label">النوع</label>
        <select name="gen" id="input" class="form-control  normal-text" required="required" >
              
            @foreach (Gender::all() as $element)
            <option value="{{ $element->id }}"  >{{ $element->gender }}</option>    
            @endforeach
        </select>
    </div>
    <div class="col-md-6">
        <label for="inputAddress" class="form-label">الجنسية</label>
        <select name="nat" id="input" class="form-control  normal-text" required="required">
            @foreach (Nationality::all() as $element)
            <option value="{{ $element->id }}"  >{{ $element->country }}</option>    
            @endforeach
        </select>
    </div>
    <div class="col-12">
        <label for="inputAddress" class="form-label">السيرة الذاتية    </label>
        <input type="file" class="form-control" name="cv" accept="application/pdf" required>
        <br>
        @php

         if(isset($_GET['alert'])){
         if($_GET['alert']==1){
        @endphp
        <div class="alert alert-success" role="alert" style="text-align:center;" >تم رفع الطلب بنجاح</div>
        @php
        }
        }
        @endphp
    </div>
    @if ($errors->any())
    <div class="alert alert-danger" style="text-align: center;">
       
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
       
    </div>
    @endif
    <div class="col-12">
        <br>
        <button type="submit" class="btn btn-primary">ارسال الطلب</button>
    </div>
</form>
</div>
@endsection
