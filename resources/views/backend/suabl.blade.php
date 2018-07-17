@extends('backend.master')
@section('title','Sửa bình luận')
@section('main')
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
                <div class="panel-heading">Sửa bình luận</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <form role="form" method="post">

                            <div class="form-group">
                                <label>Nội dung bình luận</label>
                                <textarea class="form-control" rows="3" name="noi_dung">{{ $comment->comment_content }}</textarea>
                            </div> 
                            <div class="form-group">
                            <label>Trạng thái</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="hien_thi"
                                    {{ $comment->comment_status == 1 ? 'checked' : '' }}
                                    id="optionsRadios1" value="1">Duyệt bình luận
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="hien_thi"
                                    {{ $comment->comment_status == 0 ? 'checked' : '' }} 
                                    id="optionsRadios2" value="0">Chưa duyệt
                                </label>
                            </div>

                        </div>                                            
                           <button type="submit" class="btn btn-primary" name="submit">Sửa</button>
                    </div>
                    {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->

</div><!--/.main-->
@stop