@extends('admin.layouts.master') 
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <h3 class="page-header">Cập nhật tài khoản</h3>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row user">
            <div class="col-md-6 user-profile">
                <div class="row">
                    @if (session('success'))
                        <div class="col-md-6 alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
                <form action="{{ route('admin.accounts.update', ['id' => $user->id]) }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <label>Tên </label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="full_name" value="{{ $user->full_name }}" class="form-control" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Email </label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="email" value="{{ $user->email }}" class="form-control" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Điện thoại </label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="phone" value="{{ $user->phone }}" class="form-control" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Địa chỉ </label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="address" value="{{ $user->address }}" class="form-control" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <button class="btn btn-success" type="submit">Lưu</button>
                            <a href="{{ route('admin.accounts.show') }}" class="btn btn-danger">Hủy bỏ</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection