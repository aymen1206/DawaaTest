@extends('layouts.adminapp')
@php
    use App\Models\Gender;
    use App\Models\Nationality;
    use App\Models\ApplicationOperated;
@endphp
@section('content')
   <div class="container card">


        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <table class="table table-striped text-center" id="myTable">
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
                    <tbody>
                        @foreach ($applys as $app)
                        @php
                        $filterApproved=ApplicationOperated::where('appID',$app->id)->where('CoordinatorAcception',1)->first();
                        if(!is_null($filterApproved)){
                        @endphp
                        <tr>   
                            <td>{{$app->Name}}</td>
                            <td>{{$app->DOB}}</td>
                            <td>{{$app->gen->gender}}</td>
                            <td>{{$app->nat->country}}</td>
                            <td><a href="{{asset('/upload/CVs/'.$app->CV)}}" download="{{$app->CV}}">
                                <i class="ti ti-import"></i>
                            </a>
                            </td>
                            <td><a  href="{{ url("/AdminAccept/$app->id") }}"><i class="ti ti-check"></i></a>
                            <a  href="{{ url("/AdminReject/$app->id") }}"><i class="ti ti-close"></i></a>
                            </td>
                        </tr>
                        @php
                        }   
                        @endphp
                        @endforeach
                    </tbody>
                </table>
            @php  
            if($alert=='Accepted'){
            @endphp
            <div class="col-md-12">
                <div class="alert alert-success" role="alert" style="text-align: center">
                    تم قبول طلب التوظيف
                </div>
            </div>      
            @php    
             }
            if($alert=='Rejected'){
            @endphp
            <div class="col-md-12">
                <div class="alert alert-danger" role="alert" style="text-align: center">
                    تم رفض طلب التوظيف
                </div>
            </div>      
            @php    
                }
            @endphp
            </div>
                            <!-- Tabs Tow -->
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            ...</div>
        </div>
    </div>
@endsection
