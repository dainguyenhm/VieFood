<div class="row">
    @if (session('success'))
        <div class="col-md-6 alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session('fail'))
        <div class="col-md-6 alert alert-danger">
            {{ session('fail') }}
        </div>
    @endif
    @if( count($errors) > 0 )
        <div class="col-md-6 alert alert-danger">
            @foreach( $errors->all() as $err )
                {{ $err }}<br>
            @endforeach
        </div>
    @endif
</div>