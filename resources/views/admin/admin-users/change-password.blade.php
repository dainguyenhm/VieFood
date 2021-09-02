@extends('admin.layouts.master') 
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <h3 class="page-header">Đổi mật khẩu</h3>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row user">
            <div class="col-md-6 user-profile">
                @include('admin.layouts.message')
                <form action="{{ route('admin.accounts.postChangePassword', ['id' => $user->id]) }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <label>Mật khẩu cũ(*) </label>
                        </div>
                        <div class="col-md-8">
                            <input type="password" name="old_password" class="form-control" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Mật khẩu mới(*) </label>
                        </div>
                        <div class="col-md-8">
                            <input type="password" name="password" class="form-control" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Nhập lại mật khẩu mới(*) </label>
                        </div>
                        <div class="col-md-8">
                            <input type="password" name="re_password" class="form-control" >
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