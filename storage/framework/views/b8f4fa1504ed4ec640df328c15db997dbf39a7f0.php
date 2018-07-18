<script>
     function xoaDanhmuc(){
        var conf=confirm("Bạn có chắc chắn muốn xóa danh mục này hay không?");
        return conf;
    }
</script>

<?php $__env->startSection('main'); ?>
<?php $__env->startSection('title','Quản lý danh mục'); ?>
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

                <div class="panel-body" style="position: relative;">
                    <a href="<?php echo e(asset('admin/category/add')); ?>" class="btn btn-primary" style="margin: 10px 0 20px 0; position: absolute;">Thêm danh mục mới</a>
                    <table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-sort-name="name" data-sort-order="desc">
                        <thead>
                            <tr>						        
                                <th data-sortable="true">ID</th>
                                <th data-sortable="true">Tên danh mục</th>
                                <th data-sortable="true">Tùy chọn</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $catelist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td data-checkbox="true"><?php echo e($cate->cate_id); ?></td>
                                    <td data-checkbox="true"><?php echo e($cate->cate_name); ?></td>						        
                                    <td>
                                        <a href="<?php echo e(asset('admin/category/edit/'.$cate->cate_id)); ?>" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
                                        <a onclick="return xoaDanhmuc();" href="<?php echo e(asset('admin/category/delete/'.$cate->cate_id)); ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <?php echo e($catelist->links()); ?>

                </div>
                </div>
            </div>
        </div>
    </div><!--/.row-->	



</div><!--/.main-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>