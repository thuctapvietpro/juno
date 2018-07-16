<script>
     function xoaBinhLuan(){
        var conf=confirm("Bạn có chắc chắn muốn xóa bình luận này hay không?");
        return conf;
    }
</script>
@extends('backend.master')
@section('main')
@section('title','Quản lý bình luận')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li class="active"></li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Quản lý bình luận</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">

                <div class="panel-body" style="position: relative;">
                    <table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-sort-name="name" data-sort-order="desc">

                        <thead>
                            <tr>						        
                                <th data-sortable="true">ID</th>
                                <th data-sortable="true">Họ tên</th>
                                <th data-sortable="true">Nội dung</th>
                                <th data-sortable="true">Tùy chọn</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($commentlist as $comment)
                            <tr>
                                <td data-checkbox="true">{{ $comment->comment_id }}</td>
                                <td data-checkbox="true">{{ $comment->comment_name }}</td>				
                                <td data-checkbox="true">{{ $comment->comment_content }}</td> 
                                <td>
                                    <a href="{{ asset('admin/comment/edit/'.$comment->comment_id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
                                    <a onclick="return xoaBinhLuan();" href="{{ asset('admin/comment/delete/'.$comment->comment_id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $commentlist->links() }}
                </div>
            </div>
        </div>
    </div><!--/.row-->	



</div><!--/.main-->
@stop