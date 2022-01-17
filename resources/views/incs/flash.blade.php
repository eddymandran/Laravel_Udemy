@if($message = Session::get('success'))
    <div class="alert alert-success alert-block" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" ></button>
        <strong>{{ $message }}</strong>
    </div>
@endif

@if($message = Session::get('warning'))
    <div class="alert alert-warning alert-block" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" ></button>
        <strong>{{ $message }}</strong>
    </div>
@endif
