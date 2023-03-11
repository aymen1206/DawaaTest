@extends('layouts.app-en')
@section('content')
<form method="POST" action="{{route('profile.update')}}">
    @csrf
    @method('PUT')
    <div class="card-header card-header-icon" data-background-color="rose">
        <i class="material-icons">contacts</i>
    </div>
    <div class="card-content">
        <h4 class="card-title">@lang('MainPages.editeForm')</h4>
        <div class="form-group label-floating  col-sm-6">
            <label class="control-label">@lang('MainPages.username')</label>
            <input class="form-control" name="name" value="{{$user->name}}" type="text" required="true" />
        </div>
        <div class="form-group label-floating  col-sm-6">
            <label class="control-label">@lang('MainPages.email')</label>
            <input class="form-control"  name="email" value="{{$user->email}}" type="text" readonly />
        </div>
        <div  class="form-group label-floating col-sm-4">
            <label class="control-label">@lang('MainPages.password')</label>
            <input class="form-control"    name="pw"   type="text" />
        </div>
        <div  class="form-group label-floating col-sm-4">
            <label class="control-label">@lang('MainPages.phone')</label>
            <input class="form-control"  name="phone"
            id="inputPhone" pattern="^(05|5)(5|0|3|6|4|9|1|8|7)([0-9]{7})$"
            placeholder="05**************"   
            value="{{$user->phone}}"type="text" required="true" />
        </div>
        <div  class="form-group label-floating col-sm-4">
            <label class="control-label">@lang('MainPages.Address')</label>
            <input class="form-control" name="address" value="{{$user->address}}" type="text" required="true" />
        </div>
        @php
        if($alert=='done'){
        @endphp
        <div class="form-group  label-floating col-sm-12">
            <div class="alert alert-success" role="alert" style="text-align: center">
                Profile Updated Successfuly
            </div>
        </div>     
        @php    
        }
        @endphp
        <div class="text-center">
            <button type="submit" class="btn btn-rose btn-fill btn-wd">@lang('MainPages.edite')</button>
        </div>
    </form>
@endsection
