<!DOCTYPE html>
<html>
<head>
<base href="<?php echo e(asset('backend')); ?>/">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $__env->yieldContent('title'); ?> | Juno Shop</title>
<link href="anh/admin.png" rel="shortcut icon">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="<?php echo e(asset('admin/home')); ?>"><span>JUNOSHOP</span>Admin</a>
            <ul class="user-menu">
                <li class="dropdown pull-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg><span style="color: white;">Xin chào,
                     <?php echo e(Auth::user()->user_name); ?>

                 </span> <span class="caret"></span></a>
                     <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo e(asset('admin/account')); ?>"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Thông tin thành viên</a></li>
                        <li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Cài đặt</a></li>
                        <li><a href="<?php echo e(asset('logout')); ?>"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Đăng xuất</a></li>
                    </ul>
                </li>
            </ul>
        </div>

    </div><!-- /.container-fluid -->
</nav>

<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <form role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Tìm kiếm">
        </div>
    </form>
    <ul class="nav menu">
        <li class="active"><a href="<?php echo e(asset('admin/home')); ?>"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Trang chủ quản trị</a></li>
            <li class="parent">
            <a href="<?php echo e(asset('admin/account')); ?>">
                <span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Quản lý thành viên
            </a>
            <ul class="children collapse" id="sub-item-1">
                <li>
                    <a href="<?php echo e(asset('admin/account/add')); ?>">
                    <svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg>
                        Thêm mới
                    </a>
                </li>
            </ul>			
        </li>
        <li class="parent ">
            <a href="<?php echo e(asset('admin/home')); ?>">
                <span data-toggle="collapse" href="#sub-item-2"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Quản lý sản phẩm
            </a>
            <ul class="children collapse" id="sub-item-2">
                <li>
                    <a class="" href="<?php echo e(asset('admin/home')); ?>">
                        <svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg> Danh sách sản phẩm
                    </a>
                    <a class="" href="<?php echo e(asset('admin/attribute')); ?> ">
                        <svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg> Thuộc tính sản phẩm
                    </a>
                    <li>
                        <a href="<?php echo e(asset('admin/category')); ?>">
                            <svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg> Danh mục sản phẩm
                        </a>
                    <li>
                </li>

            </ul>				
        </li>
        <li class="parent ">
            <a href="<?php echo e(asset('admin/home')); ?>">
                <span data-toggle="collapse" href="#sub-item-3"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Thư viện ảnh
            </a>
            <ul class="children collapse" id="sub-item-3">
                <li>
                    <a href="#">
                        <svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg>
                        Thêm mới
                    </a>
                </li>
            </ul>           
        </li>
        <li>
            <a href="<?php echo e(asset('admin/comment')); ?>">
                <span data-toggle="collapse" href="#sub-item-4"><svg class="glyph stroked two messages"><use xlink:href="#stroked-two-messages"/></svg></span> Quản lý bình luận
            </a>

        </li>

        <li class="parent ">

            <a href="<?php echo e(asset('admin/home')); ?>">
                <span data-toggle="collapse" href="#sub-item-5"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Quản lý đơn hàng
            </a>
            <ul class="children collapse" id="sub-item-5">
            <a href="<?php echo e(asset('admin/bill')); ?>">
                <span data-toggle="collapse" href="#sub-item-5"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Quản lý đơn hàng
            </a>
            <ul class="children collapse" id="sub-item-5">
                <li>
                    <a class="" href="#">
                        <svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg> Thêm mới
                    </a>
                </li>
            </ul>				
            </ul>			

        </li> 

        

        <li role="presentation" class="divider"></li>
        <li><a href="<?php echo e(asset('logout')); ?>"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Đăng xuất</a></li>
    </ul>

</div><!--/.sidebar-->

<!-- Main -->
     <?php echo $__env->yieldContent('main'); ?>

<script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/chart.min.js"></script>
        <script src="js/chart-data.js"></script>
        <script src="js/easypiechart.js"></script>
        <script src="js/easypiechart-data.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>  
        <script src="js/bootstrap-table.js"></script>
        <link rel="stylesheet" href="css/bootstrap-table.css"/>
        <script>
            $('#calendar').datepicker({
            });

            !function ($) {
                $(document).on("click", "ul.nav li.parent > a > span.icon", function () {
                    $(this).find('em:first').toggleClass("glyphicon-minus");
                });
                $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
            }(window.jQuery);

            $(window).on('resize', function () {
                if ($(window).width() > 768)
                    $('#sidebar-collapse').collapse('show')
            })
            $(window).on('resize', function () {
                if ($(window).width() <= 767)
                    $('#sidebar-collapse').collapse('hide')
            })
            function changeImg(input){
            //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
            if(input.files && input.files[0]){
                var reader = new FileReader();
                //Sự kiện file đã được load vào website
                reader.onload = function(e){
                    //Thay đổi đường dẫn ảnh
                    $('#avatar').attr('src',e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
            }
            $(document).ready(function() {
                $('#avatar').click(function(){
                    $('#img').click();
                });
            });
        </script>   
    </body>

</html>
