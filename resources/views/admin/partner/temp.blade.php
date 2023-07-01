<form class="form-horizontal form-label-left input_mask" action="{{ url("cms/partners" . (isset($action)?'/'.$action:'') . (isset($partner->id)?'/'.$partner->id:'') . (isset($partners['url_ext']) && $partners['url_ext'] != ''?$partners['url_ext']:'')) }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tên <span class="required">*</span></label>
        <div class="col-md-9 col-sm-9 col-xs-12">
            <input type="text" class="form-control" name="name" required="required" value="{{ isset($partner->name)?$partner->name:'' }}" {{ (isset($action) && $action == 'show'?'disabled':'') }}>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Logo</label>
        <div class="col-md-9 col-sm-9 col-xs-12">
            <input type="file" class="post_image_file" name="logo" {{ (isset($action) && $action == 'show'?'disabled':'') }}>
            <input type="input" class="form-control post_image" value="{{ isset($partner->logo)?$partner->logo:'' }}" readonly>
            <img style="width: 100%; padding-top: 5px" class="img_post_image"  src="{{ isset($partner->logo)?$partner->logo:'' }}"/>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">URL <span class="required">*</span></label>
        <div class="col-md-9 col-sm-9 col-xs-12">
            <input type="text" class="form-control" name="url" required="required" value="{{ isset($partner->url)?$partner->url:'' }}" {{ (isset($action) && $action == 'show'?'disabled':'') }}>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Quốc gia</label>
        <div class="col-md-9 col-sm-9 col-xs-12">
            <select class="form-control" name="country_id">
                <option value="0"></option>
                @if (!empty($countries->toArray()))
                    @foreach($countries as $country)
                        <option value="{{ $country->id }}"{{isset($partner) && $partner->country_id == $country->id ? ' selected' : ''}}>{{ $country->name }}</option>
                    @endforeach
                @endif
            </select>
        </div>
    </div>
    @if (!(isset($action) && $action == 'show'))
        <div class="ln_solid"></div>
        <div class="form-group">
            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                <button type="submit" class="btn btn-success">Lưu</button>
            </div>
        </div>
    @endif
</form>
