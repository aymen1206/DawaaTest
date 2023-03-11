@extends('layouts.app-en')

@section('content')

@php
    use App\Models\Gender;
    use App\Models\Nationality;
    use App\Models\ApplicationOperated;
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
                    <th>@lang('MainPages.ApplicationNumber')</th>
                    <th>@lang('MainPages.ApplierName')</th>
                    <th>@lang('MainPages.DOB')</th>
                    <th>@lang('MainPages.gender')</th>
                    <th>@lang('MainPages.nationality')</th>
                    <th>@lang('MainPages.Attachment')</th>
                    <th>@lang('MainPages.CoordinatorStatus')</th>
                    <th>@lang('MainPages.ManagerStatus')</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>@lang('MainPages.ApplicationNumber')</th>
                    <th>@lang('MainPages.ApplierName')</th>
                    <th>@lang('MainPages.DOB')</th>
                    <th>@lang('MainPages.gender')</th>
                    <th>@lang('MainPages.nationality')</th>
                    <th>@lang('MainPages.file')</th>
                    <th>@lang('MainPages.CoordinatorStatus')</th>
                    <th>@lang('MainPages.ManagerStatus')</th>
                </tr>
            </tfoot>
            @foreach ($applications as $app)
            @php
            $AppId=$app->id;
            $ApplicationOperatedRow=ApplicationOperated::where('appID',$AppId)->first();

            @endphp
            <tbody>
                <tr>
                    <td>{{$app->id}}</td>
                    <td>{{$app->Name}}</td>
                    <td>{{$app->DOB}}</td>
                    <td>{{$app->gen->gender}}</td>
                    <td>{{$app->nat->country}}</td>
                    <td><a href="{{asset('/upload/CVs/'.$app->CV)}}" download="{{$app->CV}}"><i class="material-icons">file_download</i></a></td>
                    
                    @php
                    if($ApplicationOperatedRow->CoordinatorAcception==1){
                    @endphp
                    <td style="color:Green">Accepted</td>
                    @php
                    }
                    if($ApplicationOperatedRow->CoordinatorRejection==1){
                    @endphp
                    <td  style="color:red">Rejected</td>
                    <td  style="color:red">Rejected From Coordinator</td>
                    @php
                    }
                    @endphp
                    @php
                    if($ApplicationOperatedRow->AdminAcception==1){
                    @endphp
                    <td style="color:Green">Accepted</td>
                    @php
                    }
                    if($ApplicationOperatedRow->AdminRejection==1){
                    @endphp
                    <td style="color:red">Rejected From Admin</td>
                    @php
                    }
                    @endphp
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</div>
@endsection
