@extends('backend.master')
@section('main')
@section('title','Sửa thành viên')
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
                <div class="panel-heading">Sửa thành viên</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        @include('error.note')
                        <form enctype="multipart/form-data" role="form" method="post">
                            
                            <div class="form-group">
                                <label>Tên thành viên</label>
                                <input class="form-control" type="text" required="" name="ten_tv" value="{{ $account->user_name }}">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="text" required="" name="email" value="{{ $account->user_email }}">       
                            </div>
                            <div class="form-group" >
                                        <label>Ảnh thành viên</label>
                                        <input  id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
                                        @if($account->user_avatar!=null)
                                        <img id="avatar" class="thumbnail" width="100px" src="{{ asset('/storage/avatar/'.$account->user_avatar) }}">
                                        @else
                                        <img id="avatar" class="thumbnail" width="100px" src="anh/no.png">
                                        @endif
                            </div>
                            <div class="form-group" >
                                <label>Điện thoại</label>
                                <input class="form-control" type="text" required="" name="phone" value="{{ $account->user_phone }}">
                            </div>       
                            <div class="form-group" >
                                <label>Level</label>
                                <input class="form-control" type="text" required="" name="lv" value="{{ $account->user_role }}">
                            </div>      															
                            <button type="submit" class="btn btn-primary" name="submit">Sửa</button>
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
