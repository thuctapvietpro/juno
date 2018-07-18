<?php $__env->startSection('title','Thêm thuộc tính'); ?>
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
                        <form role="form" method="post">
                            <div class="form-group">
                                <label>Tên thuộc tính</label>
                                <input class="form-control" type="text" required="" name="ten_tt">
                            </div>
                            <div class="form-group">
                                <label>Giá trị</label>
                                <textarea class="form-control" rows="3" name="gt"></textarea>
                            </div>                                   
                           <button type="submit" class="btn btn-primary" name="submit">Thêm</button>
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