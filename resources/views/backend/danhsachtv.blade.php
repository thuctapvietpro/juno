<script>
     function xoaThanhVien(){
        var conf=confirm("Bạn có chắc chắn muốn xóa thành viên này hay không?");
        return conf;
    }
</script>
@extends('backend.master')
@section('main')
@section('title','Quản lý thành viên')
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
                <div class="panel-body" style="position: relative;">
                    <a href="{{ asset('admin/account/add') }}" class="btn btn-primary" style="margin: 10px 0 20px 0; position: absolute;">Thêm thành viên mới</a>
                    <table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-sort-name="name" data-sort-order="desc">
                        <thead>
                            <tr>						        
                                <th data-sortable="true">ID</th>
                                <th data-sortable="true">Họ tên</th>
                                <th data-sortable="true">Email</th>
                                <th data-sortable="true">Ảnh thành viên</th>
                                <th data-sortable="true">điện thoại</th>
                                <th data-sortable="true">Tùy chọn</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($accountlist as $account)
                            <tr>
                                <td data-checkbox="true">{{ $account->user_id }}</td>
                                <td data-checkbox="true">{{ $account->user_name }}</td>	
                                <td data-checkbox="true">{{ $account->user_email }}</td> 
                                <td data-sortable="true">
                                    @if($account->user_avatar!=null)
                                    <img class="thumbnail" width="100px" src="{{ asset('/storage/avatar/'.$account->user_avatar) }}" alt="">
                                    @else
                                    <img class="thumbnail" width="100px" src="anh/no.png"" alt="">
                                    @endif
                                </td> 
                                <td data-checkbox="true">{{ $account->user_phone }}</td>
                                <td>
                                     <a href="{{ asset('admin/account/edit/'.$account->user_id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
                                     <a onclick="return xoaThanhVien();" href="{{ asset('admin/account/delete/'.$account->user_id) }}"  class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $accountlist->links() }}
                </div>
            </div>
        </div>
    </div><!--/.row-->	



</div><!--/.main-->
@stop