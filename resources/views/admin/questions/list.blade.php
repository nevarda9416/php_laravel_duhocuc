<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Danh sách câu hỏi có sẵn</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <?php $questions->setPath('/frequently-questions/highlight'); ?>
                    {{ $questions->links() }}
                    <table class="table">
                        <tbody id="list2" class="lists">
                        <tr>
                            <td>ID</td>
                            <td>Tiêu đề</td>
                            <td>Tác giả</td>
                            <td>Trạng thái câu hỏi</td>
                            <td></td>
                        </tr>
                        @foreach($questions as $question)
                            <tr data-questionId="{{ $question->id }}" data-categoryId="{{ $question->category_id }}">
                                <td>{{ $question->id }}</td>
                                <td>{{ $question->question }}</td>
                                <td>{{ $question->author_name }}</td>
                                <td>
                                    <?php
                                    switch ($question->status) {
                                    case 'trash':
                                    ?>
                                    <span class="label label-default">Câu hỏi bị xóa</span>
                                    <?php break;
                                    case 'draft':
                                    ?>
                                    <span class="label label-primary">Câu hỏi nháp</span>
                                    <?php break;
                                    case 'publish':
                                    ?>
                                    <span class="label label-success">Đã đăng</span>
                                    <?php break;
                                    default:
                                        break;
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a href='{{ url("frequently-questions/edit/$question->id") }}' class="btn btn-xs">
                                        <i class="fa fa-edit"></i> Edit
                                    </a>
                                    <a href='{{ url("frequently-questions/deleteHighlight/$question->id") }}' class="btn btn-xs" onclick="return confirm('Bạn có chắc muốn xóa bài viết {{ $question->question }} này chứ?')">
                                        <i class="fa fa-trash-o"></i> Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <?php $questions->setPath('/frequently-questions/highlight'); ?>
                    {{ $questions->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
