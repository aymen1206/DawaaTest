@extends('layouts.adminapp')
@section('content')
<div class="container card">
<div class="tab-content" id="v-pills-tabContent">
    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
        @php
        if($alert=='deleted'){
        @endphp
        <div class="alert alert-danger" role="alert" style="text-align:center;">
        تم حذف الموظف  بنجاح
        </div>
        @php
        }
        @endphp

        <table class="table table-striped text-center" id="myTable">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">إسم  الموظف</th>
                    <th scope="col">رقم الهاتف</th>
                    <th scope="col">العنوان</th>
                    <th scope="col">البريد الالكتروني</th>
                    <th scope="col">كلمة المرور</th>
                    <th scope="col">إدارة</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td class="normal-text">{{ $user->name }}</td>
                    <td class="normal-text">{{ $user->phone }}</td>
                    <td class="normal-text">{{ $user->address }}</td>
                    <td class="normal-text">{{ $user->email }}</td>
                    <td class="normal-text">{{ $user->password }}</td>
                    @if( $user->role=='HRCoordinator')
                    <td><i class="ti ti-more dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i><div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><span class="dropdown-item">
                    <i class="ti ti-trash mx-2"></i>
                    <a href="{{ url("/users/destroy/$user->id") }}" >
                    حذف
                    </a></span>
                    <span class="dropdown-item" ><i class="ti ti-pencil mx-2"></i>
                    <a  href="{{ url("/users/edit/$user->id") }}"> إجراء تعديل   </a>
                    </span></div>
                    </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
</div>
</div>
@endsection
