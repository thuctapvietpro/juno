@extends('backend.master')
@section('main')
@section('title','Sửa danh mục')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li class="active"></li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Quản lý danh mục</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Sửa danh mục</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        @include('error.note')
                        <form enctype="multipart/form-data" role="form" method="post">
                            <div class="form-group">
                                <label>Tên danh mục</label>
                                <input class="form-control" type="text" required="" name="ten_dm" value="{{ old('ten_dm',isset($data) ? $data['cate_name'] : null) }}">
                            </div>
                            
                           {{--  <div class="form-group">
                                        <label>Danh mục cha</label>
                                        <select name="dm_cha" class="form-control">
                                            <option value="0" selected>Lựa chọn danh mục</option>
                                            {{ cate_parent($parent,0,"--",$data["cate_parent"]) }}
                                        </select> 
                            </div> --}}
                            <div class="form-group">
                                <label>Ảnh danh mục</label>
                                <input  id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
                                @if($data['cate_thumbnail']!=null)
                                    <img id="avatar" class="thumbnail" width="50px" src="{{ asset('/storage/avatar/'.$data['cate_thumbnail']) }}">
                                @else
                                    <img id="avatar" class="thumbnail" width="50px" src="anh/new_seo-10-512.png">
                                @endif
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
