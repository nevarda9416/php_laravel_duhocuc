<?php
$queryString = app('request')->getQueryString();
if ($queryString != '')
    $queryString = '?' . $queryString;
?>
<div class="col-md-7 col-sm-7 col-xs-12">
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
            <?php $comments->setPath('/comments'); ?>
            {{ $comments->links() }}
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nội dung bình luận</th>
                    <th>Trạng thái</th>
                    <th>Thao tác</th>
                </tr>
                </thead>
                <tbody>
                @foreach($comments as $comment)
                    <tr>
                        <td>{{ $comment->id }}</td>
                        <td>{{ $comment->content }}</td>
                        <td>
                            <?php
                            switch ($comment->status) {
                            case 'pending':
                            ?>
                            <span class="label label-warning">Chờ đăng</span>
                            <?php break;
                            case 'publish':
                            ?>
                            <span class="label label-success">Cho phép đăng</span>
                            <?php break;
                            default:
                                break;
                            }
                            ?>
                        </td>
                        <td>
                            <a href='{{ url("comment/edit/$comment->id$queryString") }}' class="btn btn-xs btn-warning">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                            <a href='{{ url("comment/delete/$comment->id$queryString") }}' class="btn btn-xs btn-danger" onclick="return confirm('Bạn có chắc muốn xóa bình luận ID = {{ $comment->id }} này chứ?')">
                                <i class="fa fa-trash-o"></i> Delete
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $comments->links() }}
        </div>
    </div>
</div>
