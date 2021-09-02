@extends('layouts.master')
@section('content')
    @include('layouts.slide-show')
    @include('layouts.slide-product')
    <div class="container">
        <div class="row main">
            @include('layouts.left-menu')
            @include('layouts.list-product')
        </div>
    </div>
@endsection