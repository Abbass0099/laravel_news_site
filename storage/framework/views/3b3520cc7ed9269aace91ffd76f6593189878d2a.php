<?php $__env->startSection('title', 'Settings'); ?>

<?php $__env->startPush('styles'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

    <section class="content-header">
        <h1>
            Settings
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab">Genarel Setting</a></li>
                        <li><a href="#tab_2" data-toggle="tab">Social Media</a></li>
                        <li><a href="#tab_3" data-toggle="tab">About Us</a></li>
                        <li><a href="#tab_4" data-toggle="tab">Address</a></li>
                    </ul>
                    <form action="<?php echo e(route('admin.settings.store')); ?>" method="post" class="form-horizontal" enctype="multipart/form-data" role="form">
                        <?php echo csrf_field(); ?>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_1">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="sitename" class="col-sm-2 control-label">Site Name:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="site_name" class="form-control" id="sitename" value="<?php echo e(@$setting->site_name); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="sitelogo" class="col-sm-2 control-label">Site Logo:</label>
                                        <div class="col-sm-10 col-md-6">
                                            <input type="file" name="site_logo" class="form-control" id="sitelogo" value="<?php echo e(@$setting->site_logo); ?>">
                                        </div>
                                        <div class="col-sm-10 col-md-4">
                                            <?php if(@$setting->site_logo): ?>
                                                <div class="bgimage" style="background-image:url(<?php echo e(asset('images/'.@$setting->site_logo)); ?>)"></div>
                                            <?php else: ?>
                                                <div class="bgimage" style="background-image:url(<?php echo e(asset('images/logo.png')); ?>"></div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="sitefavicon" class="col-sm-2 control-label">Site Favicon:</label>
                                        <div class="col-sm-10 col-md-6">
                                            <input type="file" name="site_favicon" class="form-control" id="sitefavicon">
                                        </div>
                                        <div class="col-sm-10 col-md-4">
                                            <?php if(@$setting->site_favicon): ?>
                                                <img src="<?php echo e(asset('images/'.@$setting->site_favicon)); ?>" alt="Site Favicon" class="img-responsive">
                                            <?php else: ?>
                                                <img src="<?php echo e(asset('images/favicon.ico')); ?>" alt="Site Logo" class="img-responsive" width="36">
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="siteemail" class="col-sm-2 control-label">Email:</label>
                                        <div class="col-sm-10">
                                            <input type="email" name="email" class="form-control" id="siteemail" value="<?php echo e(@$setting->email); ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="sitephone" class="col-sm-2 control-label">Phone:</label>
                                        <div class="col-sm-10">
                                            <input type="number" name="phone" class="form-control" id="sitephone" value="<?php echo e(@$setting->phone); ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="tab_2">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="sfacebook" class="col-sm-2 control-label">Facebook:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="facebook" class="form-control" id="sfacebook" value="<?php echo e(@$setting->facebook); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="stwitter" class="col-sm-2 control-label">Twitter:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="twitter" class="form-control" id="stwitter" value="<?php echo e(@$setting->twitter); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="slinkedin" class="col-sm-2 control-label">LinkedIn:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="linkedin" class="form-control" id="slinkedin" value="<?php echo e(@$setting->linkedin); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="svimeo" class="col-sm-2 control-label">Vimeo:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="vimeo" class="form-control" id="svimeo" value="<?php echo e(@$setting->vimeo); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="syoutube" class="col-sm-2 control-label">Youtube:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="youtube" class="form-control" id="syoutube" value="<?php echo e(@$setting->youtube); ?>">
                                        </div>
                                    </div>

                                    <small class="pull-right"><em>If you don't want to show a social media on front-end, just leave the input field blank.</em></small>
                                </div>
                            </div>

                            <div class="tab-pane" id="tab_3">
                                <div class="box-body">
                                    <div class="aboutus">
                                        <label>About Us</label>
                                        <textarea class="textarea" name="about_us" paceholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo e(@$setting->about_us); ?></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="tab_4">
                                <div class="box-body">
                                    <div class="address">
                                        <label>Address</label>
                                        <textarea class="textarea" name="address" value="Place some text here" style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo e(@$setting->address); ?></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="box-footer">
                            <button type="submit" name="genarel" class="btn btn-info btn-flat">SAVE</button>
                        </div>

                    </div>
                </form>
            </div>

        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
    $(function () {
        $('.textarea').wysihtml5();
    });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('backend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>