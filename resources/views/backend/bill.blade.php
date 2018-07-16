<script>
     function xoaDanhmuc(){
        var conf=confirm("Bạn có chắc chắn muốn xóa danh mục này hay không?");
        return conf;
    }
</script>
@extends('backend.master')
@section('main')
@section('title','Quản lý đơn hàng')
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
        <div class="col-lg-12">
            <div class="panel panel-default">

                <div class="panel-body" style="position: relative;">
                    <a href="{{ asset('admin/bill') }}" class="btn btn-primary" style="margin: 10px 0 20px 0; position: absolute;">Danh sách đơn hàng</a>
                    <table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-sort-name="name" data-sort-order="desc">
                        <thead>
                            <tr>                                
                                <th data-sortable="true">ID</th>
                                <th data-sortable="true">Tên khách hàng</th>
                                <th data-sortable="true">Phone</th>
                                <th data-sortable="true">Địa chỉ</th>
                                <th data-sortable="true">Tùy chọn</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($oderslist as $order)
                                <tr>
                                    <td data-checkbox="true">{{ $order->oder_id }}</td>
                                    <td data-checkbox="true">{{ $order->oder_name }}</td>
                                    <td data-checkbox="true">{{ $order->oder_phone }}</td>
                                    <td data-checkbox="true">{{ $order->oder_address }}</td>
                                    <td>
                                        <a href="{{ asset('admin/bill/edit/'.$order->oder_id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
                                        <a onclick="return xoaDanhmuc();" href="{{ asset('admin/bill/delete/'.$order->oder_id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                   {{--  câu lệnh giúp thực hiện phân trang --}}
                    {{ $order->links() }}
                </div>
                </div>
            </div>
        </div>
    </div><!--/.row-->  



</div><!--/.main-->
@stop