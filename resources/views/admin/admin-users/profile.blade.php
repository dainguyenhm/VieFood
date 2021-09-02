@extends('admin.layouts.master') 
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <h3 class="page-header">Thông tin tài khoản</h3>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row user">
            <div class="col-md-6 user-profile">
                <div class="row">
                    <div class="col-md-4">
                        <label>Tên </label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="full_name" value="{{ $user->full_name }}" class="form-control" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label>Email </label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="email" value="{{ $user->email }}" class="form-control" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label>Điện thoại </label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="phone" value="{{ $user->phone }}" class="form-control" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label>Địa chỉ </label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="address" value="{{ $user->address }}" class="form-control" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label>Quyền tài khoản </label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="address" value="@if ($user->role == 1) Admin System @else Admin Normal @endif" class="form-control" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-8">
                        <a href="{{ route('admin.accounts.edit', ['id' => $user->id]) }}" class="btn btn-primary">Cập nhật</a>
                        <a href="{{ route('admin.accounts.getChangePassword', ['id' => $user->id]) }}" class="change-password">Đổi mật khẩu</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection