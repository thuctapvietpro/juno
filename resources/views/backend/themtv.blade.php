@extends('backend.master')
@section('main')
@section('title','Thêm thành viên')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li class="active"></li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Quản lý thành viên</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Thêm mới thành viên</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        @include('error.note')
                        <form enctype="multipart/form-data" role="form" method="post">
                            
                            <div class="form-group">
                                <label>Tên thành viên</label>
                                <input class="form-control" type="text" required="" name="ten_tv">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="text" required="" name="email">       
                            </div>
                            <div class="form-group" >
                                <label>Mật khẩu</label>
                                <input class="form-control" type="text" required="" name="mk">
                            </div> 
                            <div class="form-group" >
                                        <label>Ảnh thành viên</label>
                                        <input  id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
                                        <img id="avatar" class="thumbnail" width="100px" src="anh/new_seo-10-512.png">
                            </div>
                            <div class="form-group" >
                                <label>Điện thoại</label>
                                <input class="form-control" type="text" required="" name="phone">
                            </div>       
                            <div class="form-group" >
                                <label>Level</label>
                                <input class="form-control" type="text" required="" name="lv">
                            </div>      															
                            <button type="submit" class="btn btn-primary" name="submit">Thêm mới</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>

                    </div>
                    {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->

</div><!--/.main-->
@stop
