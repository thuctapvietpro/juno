<?php $__env->startSection('title','Sửa thuộc tính'); ?>
<?php $__env->startSection('main'); ?>
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
                         <?php echo $__env->make('error.note', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                        <form role="form" method="post">

                            <div class="form-group">
                                <label>Tên thuộc tính</label>
                                <input class="form-control" type="text" required="" name="ten_tt"
                                value="<?php echo e($att->att_name); ?>">
                            </div>
                            <div class="form-group">
                                <label>Giá trị</label>
                                    <?php $__currentLoopData = $attlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attvalue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <input class="form-control" type="hidden" required="" name="idatt[]" value="<?php echo e($attvalue->att_value_id); ?>">
                                        <input class="form-control" type="text" required="" name="name_id[<?php echo e($attvalue->att_value_id); ?>]" value="<?php echo e($attvalue->att_value); ?>">

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <div class="form-group">
                                <label>Giá trị mới</label>
                                <input class="form-control" type="text" name="gt_moi"
                                value="">
                            </div>                                   
                           <button type="submit" class="btn btn-primary" name="submit">Sửa</button>
                    </div>
                    <?php echo e(csrf_field()); ?>

                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->

</div><!--/.main-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>