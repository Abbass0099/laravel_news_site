<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <title>News - <?php echo $__env->yieldContent('title'); ?></title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="<?php echo e(asset('backend/components/bootstrap/dist/css/bootstrap.min.css')); ?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo e(asset('backend/components/font-awesome/css/font-awesome.min.css')); ?>">
        <!-- Ionicons -->
        <link rel="stylesheet" href="<?php echo e(asset('backend/components/Ionicons/css/ionicons.min.css')); ?>">

        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"/>

        <?php echo $__env->yieldPushContent('styles'); ?>

        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo e(asset('backend/dist/css/AdminLTE.min.css')); ?>">
        <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo e(asset('backend/dist/css/skins/_all-skins.min.css')); ?>">
        <!-- Date Picker -->
        <link rel="stylesheet" href="<?php echo e(asset('backend/components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')); ?>">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="<?php echo e(asset('backend/components/bootstrap-daterangepicker/daterangepicker.css')); ?>">
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel="stylesheet" href="<?php echo e(asset('backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')); ?>">
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
            
            <!-- Google Font -->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
            <link rel="stylesheet" href="<?php echo e(asset('backend/style.css')); ?>">
    </head>

    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <?php echo $__env->make('backend.layout.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('backend.layout.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>


            <div class="content-wrapper">

                <?php echo $__env->yieldContent('content'); ?>

            </div>

            <?php echo $__env->make('backend.layout.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('backend.layout.partials.right-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <div class="control-sidebar-bg"></div>
            
        </div>

        <!-- jQuery 3 -->
        <script src="<?php echo e(asset('backend/components/jquery/dist/jquery.min.js')); ?>"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="<?php echo e(asset('backend/components/jquery-ui/jquery-ui.min.js')); ?>"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Bootstrap 3.3.7 -->
        <script src="<?php echo e(asset('backend/components/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
        
        <?php echo $__env->yieldPushContent('scripts'); ?>
        
        <!-- daterangepicker -->
        <script src="<?php echo e(asset('backend/components/moment/min/moment.min.js')); ?>"></script>
        <script src="<?php echo e(asset('backend/components/bootstrap-daterangepicker/daterangepicker.js')); ?>"></script>
        <!-- datepicker -->
        <script src="<?php echo e(asset('backend/components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')); ?>"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?php echo e(asset('backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')); ?>"></script>
        <!-- Slimscroll -->
        <script src="<?php echo e(asset('backend/components/jquery-slimscroll/jquery.slimscroll.min.js')); ?>"></script>
        <!-- FastClick -->
        <script src="<?php echo e(asset('backend/components/fastclick/lib/fastclick.js')); ?>"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo e(asset('backend/dist/js/adminlte.min.js')); ?>"></script>
        
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo e(asset('backend/dist/js/demo.js')); ?>"></script>
        
        <script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script>
            // toastr.options.closeButton = true;
            <?php if(Session::has('message')): ?>
                var type = "<?php echo e(Session::get('alert-type', 'success')); ?>";
                switch(type){
                    case 'info':
                        toastr.info("<?php echo e(Session::get('message')); ?>");
                        break;
                    
                    case 'warning':
                        toastr.warning("<?php echo e(Session::get('message')); ?>");
                        break;
            
                    case 'success':
                        toastr.success("<?php echo e(Session::get('message')); ?>","SUCCESS",{progressBar:true});
                        break;
            
                    case 'error':
                        toastr.error("<?php echo e(Session::get('message')); ?>","ERROR",{progressBar:true});
                        break;
                }
            <?php endif; ?>

            <?php if($errors->any()): ?>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    toastr.error('<?php echo e($error); ?>','ERROR!',{ progressBar: true });
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </script>
        
    </body>

</html>
