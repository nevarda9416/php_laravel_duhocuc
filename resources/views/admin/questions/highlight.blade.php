@extends('layouts.default')
@section('content')
    <div class="page-title">
        <div class="title_left">
            <h3><a href="{{ url('frequently-questions/highlight') }}" title="Tất cả viết nổi bật">Tất cả câu hỏi nổi bật</a>&nbsp;<small>&rArr;&nbsp;Kéo thả câu hỏi có sẵn vào danh sách câu hỏi nổi bật</small></h3>
            <select class="form-control" name="category_id">
                <option>-- Chọn danh mục câu hỏi nổi bật --</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        @include('components.alert')
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="x_panel bg-blue-sky">
                <div class="x_title">
                    <h2>Danh sách câu hỏi nổi bật</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form class="form-horizontal form-label-left" id="highlight_form">
                        @csrf
                        <table class="table">
                            <tbody id="list1" class="lists">
                            <tr>
                                <td>ID</td>
                                <td>Tiêu đề</td>
                                <td>Tác giả</td>
                                <td>Trạng thái câu hỏi</td>
                                <td></td>
                            </tr>
                            @foreach($highlightQuestions as $question)
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
                                        <a href='{{ url("frequently-questions/deleteHighlight/$question->id") }}' class="btn btn-xs" onclick="return confirm('Bạn có chắc muốn xóa câu hỏi {{ $question->question }} này chứ?')">
                                            <i class="fa fa-trash-o"></i> Delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
        @include('questions.list')
    </div>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function () {
            $('select[name="category_id"]').change(function () {
                window.location.href = '/frequently-questions/highlight/' + $(this).val();
            });
            $('#list1').sortable({
                connectWith: '.lists',
                cursor: 'move',
                start: function (event, ui) {
                    ui.item.startPos = ui.item.index();
                },
                stop: function (event, ui) {
                    console.log('Start position ' + ui.item.startPos);
                    console.log('New position ' + ui.item.index());
                    $.map($(this).find('tr'), function(el) {
                        console.log($(el).attr('data-questionId') + ' = ' + $(el).index());
                        $.ajax({
                            type: 'POST',
                            url: '{{ url('frequently-questions/orderHighlight') }}',
                            data: $('#highlight_form').serialize() + "&questionId=" + $(el).attr('data-questionId')
                                + "&order=" + $(el).index(), // serializes the form's elements
                            success: function (result, status, xhr) {
                                result = JSON.parse(result);
                            },
                            error: function (xhr, status, error) {
                                console.log(status + '; ' + error);
                            }
                        });
                    });
                    new PNotify({
                        title: 'Thông báo',
                        text: 'Đã sắp xếp lại câu hỏi nổi bật.',
                        type: 'success',
                        styling: 'bootstrap3'
                    })
                },
                receive: function (event, ui) {
                    console.log($(ui.item).attr('data-questionId'));
                    $.ajax({
                        type: 'POST',
                        url: '{{ url('frequently-questions/addHighlight') }}',
                        data: $('#highlight_form').serialize() + "&questionId=" + $(ui.item).attr('data-questionId') + "&categoryId=" + $(ui.item).attr('data-categoryId'), // serializes the form's elements
                        success: function (result, status, xhr) {
                            result = JSON.parse(result);
                            new PNotify({
                                title: 'Thông báo',
                                text: 'Thêm câu hỏi nổi bật thành công.',
                                type: 'success',
                                styling: 'bootstrap3'
                            });
                            setTimeout(function () {
                                window.location.reload();
                            }, 1500);
                        },
                        error: function (xhr, status, error) {
                            console.log(status + '; ' + error);
                        }
                    });
                }
            }).disableSelection();
            $('#list2').sortable({
                connectWith: '.lists',
                cursor: 'move',
                receive: function (event, ui) {
                    $.ajax({
                        type: 'POST',
                        url: '{{ url('frequently-questions/removeHighlight') }}',
                        data: $('#highlight_form').serialize() + "&questionId=" + $(ui.item).attr('data-questionId') + "&categoryId=" + $(ui.item).attr('data-categoryId'), // serializes the form's elements
                        success: function (result, status, xhr) {
                            result = JSON.parse(result);
                            new PNotify({
                                title: 'Thông báo',
                                text: 'Đã bỏ câu hỏi nổi bật.',
                                styling: 'bootstrap3'
                            })
                        },
                        error: function (xhr, status, error) {
                            console.log(status + '; ' + error);
                        }
                    });
                }
            }).disableSelection();
        });
    </script>
@endsection
