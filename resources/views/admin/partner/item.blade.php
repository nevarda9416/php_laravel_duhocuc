<?php
$i = 0;
?>
<table class="table">
    <thead>
    <tr>
        <th style="padding-bottom: 2px;">
            <input type='checkbox' name='cbkpartnerall' id='cbkpartnerall' value=''>
            <a class="btn btn-xs" id="a_cbkpartnerall">
                <i class="fa fa-trash-o"></i> Xóa
            </a>
        </th>
        <th>Tên đối tác</th>
        <th>Logo</th>
        <th>Thao tác</th>
    </tr>
    </thead>
    <tbody>
    @if(isset($partners['data']) && count($partners['data']) > 0)
        @foreach($partners['data'] as $val)
            <?php
            $i++;
            ?>
            <tr>
                <td>
                    <input type='checkbox' name='cbkpartner{{$i}}' id='cbkpartner{{$i}}' value='{{$val->id}}'>
                </td>
                <td>
                    <a href='{{ url("cms/partner/edit/" . $val->id . $partners['url_ext'] ) }}' id="a_partner_name{{$i}}" class="btn btn-xs">
                        {{ $val->name }}<span style="color: #0ab21b; margin-left: 10px">{{((isset($val->is_default) && $val->is_default == 1)?'(mặc định)':'')}}</span>
                    </a>
                </td>
                <td>
                    @if(isset($val->logo) && $val->logo != '')
                        <img style="width: 200px;" class="img_post_image"  src="{{ $partners['path_imgs_url'].$val->logo }}"/>
                    @endif
                </td>
                <td>
                    <a href='{{ url("cms/partner/edit/" . $val->id . $partners['url_ext']) }}' class="btn btn-xs">
                        <i class="fa fa-edit"></i> Edit
                    </a>

                </td>
            </tr>
        @endforeach
    @else
        <tr>
            <td>
                <div style="margin-top: 20px;">
                    Không có đối tác được tìm thấy!
                </div>
            </td>
        </tr>
    @endif
    </tbody>
</table>
{{ (isset($partners['p']) && $partners['p'] != '')?$partners['data']->appends(['p' => $partners['p']])->links():$partners['data']->links() }}
<input type='hidden' name='h_max_item_onpage' id='h_max_item_onpage' value='{{$i}}'>
