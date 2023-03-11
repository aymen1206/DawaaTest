@extends('layouts.app-en')

@section('content')

@php
    use App\Models\Gender;
    use App\Models\Nationality;
@endphp
<div class="card-header card-header-icon" data-background-color="purple">
<img src="assets/img/logo/document.png" style="width:30px; height:30px;"> 
</div>
<div class="card-content">
    <h4 class="card-title">@lang('MainPages.TheApplications')</h4>
    <div class="material-datatables">
        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
            <thead>
                <tr>
                    <th>@lang('MainPages.ApplierName')</th>
                    <th>@lang('MainPages.DOB')</th>
                    <th>@lang('MainPages.gender')</th>
                    <th>@lang('MainPages.nationality')</th>
                    <th>@lang('MainPages.file')</th>
                    <th>@lang('MainPages.operation')</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>@lang('MainPages.ApplierName')</th>
                    <th>@lang('MainPages.DOB')</th>
                    <th>@lang('MainPages.gender')</th>
                    <th>@lang('MainPages.nationality')</th>
                    <th>@lang('MainPages.file')</th>
                    <th>@lang('MainPages.operation')</th>
                </tr>
            </tfoot>
            @foreach ($applys as $app)
            <tbody>
                <tr>
                    <td>{{$app->Name}}</td>
                    <td>{{$app->DOB}}</td>
                    <td>{{$app->gen->gender}}</td>
                    <td>{{$app->nat->country}}</td>
                    <td><a href="{{asset('/upload/CVs/'.$app->CV)}}" download="{{$app->CV}}"><i class="material-icons">file_download</i></a></td>
                    <td>
                        <a  href="{{ url("/CoordinatorAccept/$app->id") }}">
                            <i class="material-icons">done</i>
                         </a>
                         <a  href="{{ url("/CoordinatorReject/$app->id") }}">
                             <i class="material-icons">do_not_disturb</i>                                                    
                        </a>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
        @php  
        if($alert=='Accepted'){
        @endphp
            <div class="col-md-12">
                <div class="alert alert-success" role="alert" style="text-align: center">
                    Application Accepted Successfuly
                </div>
            </div>      
        @php    
        }
        if($alert=='Rejected'){
        @endphp
            <div class="col-md-12">
                <div class="alert alert-danger" role="alert" style="text-align: center">
                    Application Rejected Successfuly
                </div>
            </div>      
        @php    
        }
        @endphp
    </div>
</div>
@endsection
