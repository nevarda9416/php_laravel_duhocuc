<?php
$queryString = app('request')->getQueryString();
if ($queryString != '')
    $queryString = '?' . $queryString;
?>
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
            <?php $medias->setPath('/cms/medias'); ?>
            {{ $medias->links() }}
            <table class="table">
                <thead>
                <tr>
                    <th>File</th>
                    <th>Loại</th>
                    <th>Thao tác</th>
                </tr>
                </thead>
                <tbody>
                @foreach($medias as $media)
                    <tr>
                        <td><a href="{{ env('FOLDER_UPLOAD') . $media->file }}" target="_blank">
                                <img src="{{ env('FOLDER_UPLOAD') . $media->file }}" width="100px"/>
                                        </a></td>
                        <td><strong>{{ $media->media_type == 'picture' ? 'Ảnh' : ($media->media_type == 'video' ? 'Video' : 'N/A') }}</strong></td>
                        <td>
                            <a href='{{ url("cms/medias/edit/$media->id$queryString") }}' class="btn btn-xs">
                                <i class="fa fa-edit"></i> Sửa
                            </a>
                            <a href='{{ url("cms/medias/delete/$media->id$queryString") }}' class="btn btn-xs" onclick="return confirm('Bạn có chắc muốn xóa file {{ $media->title }} này chứ?')">
                                <i class="fa fa-trash-o"></i> Xóa
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $medias->links() }}
        </div>
    </div>
</div>
