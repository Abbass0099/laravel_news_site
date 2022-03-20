<?php $__env->startSection('title', 'Profile'); ?>

<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('backend/plugins/iCheck/square/blue.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

    <section class="content-header">
        <h1>
            <?php echo e(auth()->user()->name); ?>'s Profile
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">General Elements</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">

            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Update Profile</h3>
                    </div>

                    <form action="<?php echo e(route('profile.update')); ?>" method="POST" enctype="multipart/form-data" role="form">
                        <?php echo csrf_field(); ?>

                        <div class="box-body">
                            <div class="form-group">
                                <label for="editusername">User Name</label>
                                <input type="text" name="name" class="form-control" id="editusername" value="<?php echo e($user->name); ?>">
                            </div>
                            <div class="form-group">
                                <label for="edituseremail">User Email</label>
                                <input type="email" name="email" class="form-control" id="edituseremail" value="<?php echo e($user->email); ?>">
                            </div>
                            <div class="box-img">
                                <img src="<?php echo e(asset('images/'.$user->photo)); ?>" alt="<?php echo e($user->name); ?>" class="img-responsive">
                            </div>
                            <div class="form-group">
                                <label for="newsimage">Featured Image</label>
                                <input type="file" name="photo" id="newsimage">
                                <p class="help-block">(Image must be in .png or .jpg format)</p>
                            </div>
                            <hr>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="status" <?php echo e($user->status ? 'checked' : ''); ?>> Active
                                </label>
                            </div>
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary btn-flat">UPDATE</button>
                        </div>

                    </form>

                </div>
            </div>
                
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Change Password</h3>
                    </div>
                    <form action="<?php echo e(route('profile.changepassword')); ?>" method="POST" role="form">
                        <?php echo csrf_field(); ?>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="currentpassword">Current Password</label>
                                <input type="password" name="currentpassword" class="form-control" id="currentpassword">
                            </div>
                            <div class="form-group">
                                <label for="newpassword">New Password</label>
                                <input type="password" name="newpassword" class="form-control" id="newpassword">
                            </div>
                            <div class="form-group">
                                <label for="newpasconfirm">Confirm Password</label>
                                <input type="password" name="newpassword_confirmation" class="form-control" id="newpasconfirm">
                            </div>
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary btn-flat">CHANGE PASSWORD</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <!-- iCheck -->
    <script src="<?php echo e(asset('backend/plugins/iCheck/icheck.min.js')); ?>"></script>
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue'
            });
        });
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('backend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>