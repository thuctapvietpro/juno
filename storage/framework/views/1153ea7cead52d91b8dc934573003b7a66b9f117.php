<script>
    function xoaThuocTinh(){
        var conf=confirm("Bạn có chắc chắn muốn xóa thuộc tính này hay không?");
        return conf;
    }
    function xoaGiaTri(){
        var conf=confirm("Bạn có chắc chắn muốn xóa giá trị này hay không?");
        return conf;
    }
</script>

<?php $__env->startSection('main'); ?>
<?php $__env->startSection('title','Quản lý thuộc tính'); ?>
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

                <div class="panel-body" style="position: relative;">
                    <a href="<?php echo e(asset('admin/attribute/add')); ?>" class="btn btn-primary" style="margin: 10px 0 20px 0; position: absolute;">Thêm thuộc tính mới</a>
                    <table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-sort-name="name" data-sort-order="desc">

                        <thead>
                            <tr>
                                <th data-sortable="true">ID</th>
                                <th data-sortable="true">Tên thuộc tính</th>
                                <th data-sortable="true">Giá trị</th>
                                <th data-sortable="true">Tùy chọn</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $attlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $att): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                           
                            <tr>
                                <td data-checkbox="true"><?php echo e($att->att_id); ?></td>
                                <td data-checkbox="true"><?php echo e($att->att_name); ?></td>
                                
                                <td data-checkbox>
                                    <?php $__currentLoopData = $att->value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attvalue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span style="background-color: #00CC00;" class="badge badge-info">
                                        <?php echo e($attvalue->att_value); ?>

                                        <a onclick="return xoaGiaTri();" class="" href="<?php echo e(asset('admin/attribute/deletevalue/'.$attvalue->att_value_id)); ?>">
                                            <i style="color: grey;" class="fa fa-remove"></i>
                                        </a>
                                        </span>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                               
                                <td>
                                    <a href="<?php echo e(asset('admin/attribute/edit/'.$att->att_id)); ?>" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
                                    <a onclick="return xoaThuocTinh();" href="<?php echo e(asset('admin/attribute/delete/'.$att->att_id)); ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div><!--/.row-->



</div><!--/.main-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>