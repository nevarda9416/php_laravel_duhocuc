@if (count($errors) > 0)
    <div class="alert alert-danger alert-dismissable fade in mb-0" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (Session::has('info'))
    <div class="alert alert-info alert-dismissable fade in mb-0" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        <strong>{{ Session::get('info') }}</strong>
    </div>
@endif
@if (Session::has('warning'))
    <div class="alert alert-warning alert-dismissable fade in mb-0" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        <strong>{{ Session::get('warning') }}</strong>
    </div>
@endif
@if (Session::has('message'))
    <div class="alert alert-success alert-dismissible fade in mb-0" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        <strong>{{ Session::get('message') }}</strong>
    </div>
@endif
@if (Session::has('success'))
    <div class="alert alert-success alert-dismissable fade in mb-0" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        <strong>{{ Session::get('success') }}</strong>
    </div>
@endif
@if (Session::has('error'))
    <div class="alert alert-danger alert-dismissable fade in mb-0" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        <strong>{{ Session::get('error') }}</strong>
    </div>
@endif
