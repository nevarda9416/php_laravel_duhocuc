<div class="col-md-5 col-sm-5 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <table class="table">
                <thead>
                <tr>
                    <th>File</th>
                    <th>Thao tác</th>
                </tr>
                </thead>
                <tbody>
                @foreach($medias as $media)
                    <tr>
                        <td><a href="{{ env('FOLDER_UPLOAD') . $media->file }}" target="_blank">{{ $media->file }}</a></td>
                        <td>
                            <a href='{{ url("cms/media/delete/$media->id") }}' class="btn btn-xs" onclick="return confirm('Bạn có chắc muốn xóa file {{ $media->title }} này chứ?')">
                                <i class="fa fa-trash-o"></i> Delete
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
