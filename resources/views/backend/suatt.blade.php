@extends('backend.master')
@section('title','Sửa thuộc tính')
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
            <h1 class="page-header">Quản lý thuộc tính</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Thêm thuộc tính</div>
                <div class="panel-body">
                    <div class="col-md-12">
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
                         @include('error.note')
>>>>>>> tuananh
>>>>>>> devolopment
                        <form role="form" method="post">

                            <div class="form-group">
                                <label>Tên thuộc tính</label>
                                <input class="form-control" type="text" required="" name="ten_tt"
                                value="{{ $att->att_name }}">
                            </div>
                            <div class="form-group">
                                <label>Giá trị</label>
                                    @foreach ($attlist as $attvalue)
                                        <input class="form-control" type="hidden" required="" name="idatt[]" value="{{ $attvalue->att_value_id }}">
<<<<<<< HEAD
                                        <input class="form-control" type="text" required="" name="name_id[{{ $attvalue->att_value_id }}]" value="{{ $attvalue->att_value }}">
=======
                                        <input class="form-control" type="text" required="" name="name_id[]" value="{{ $attvalue->att_value }}">
>>>>>>> devolopment
                                    @endforeach
                            </div>
                            <div class="form-group">
                                <label>Giá trị mới</label>
                                <input class="form-control" type="text" name="gt_moi"
                                value="">
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