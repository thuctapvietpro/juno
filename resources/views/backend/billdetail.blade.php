
@extends('backend.master')
@section('title','Chi tiết đơn hàng')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">           
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="{{ asset('admin/home') }}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li class="active"></li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Quản lý đơn hàng</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Chi tiết đơn hàng
                </div>
                <section class="content">
                    <!-- Default box -->
                    <div class="box">
                        <div class="box-header with-border">
                            <div class="row">
                                <div class="col-md-12">
                                    <table id="myTable" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting col-md-1" >STT</th>
                                                <th class="sorting_asc col-md-2">Tên sản phẩm</th>
                                                <th class="sorting col-md-2">Ảnh sản phẩm</th>
                                                <th class="sorting col-md-1">Số lượng</th>
                                                <th class="sorting col-md-1">Thời gian</th>
                                                <th class="sorting col-md-1">Giá tiền</th>
                                                <th class="sorting col-md-2">Tổng tiền</th>
                                            </thead>
                                            <tbody>
                                                @foreach($prodlist as $key=>$product)
                                                <tr>
                                                    <td>{{$key+1}}</td>
                                                    <td>{{ $product->prod_name }}</td>
                                                    <td><img height="150px" src="{{ asset('/storage/avatar/'.$product->prod_thumbnail) }}" alt="anh" class="thumbnail"></td>
                                                    <td>{{ $detaillist->qty }}</td>
                                                    <td>{{ $detaillist->created_at }}</td>
                                                    <td>{{ number_format($detaillist->price) }} VNĐ</td>
                                                    <td>{{ number_format($detaillist->total) }} VNĐ</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <form method="POST" enctype="multipart/form-data">
                                        <input type="hidden" name="_method" value="PUT">
                                        
                                        <div class="col-md-8"></div>
                                        <div class="col-md-4">
                                            <div class="form-inline">
                                                <label>Trạng thái giao hàng: </label>
                                                <select name="status" class="form-control input-inline" style="width: 200px">
                                                    <option value="1" @if($detaillist->oder_status == 1) selected @endif>Chưa giao</option>
                                                    <option value="2" @if($detaillist->oder_status == 2) selected @endif>Đang giao</option>
                                                    <option value="3" @if($detaillist->oder_status == 3) selected @endif>Đã giao</option>
                                                </select>

                                                <a href="{{ asset('admin/bill') }}" name="submit" class="btn btn-primary">Xử lý</a>
                                            </div>
                                        </div>
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div><!--/.main-->
            @stop