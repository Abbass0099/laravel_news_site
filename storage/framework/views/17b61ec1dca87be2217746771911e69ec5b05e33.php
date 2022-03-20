<?php $__env->startSection('title', 'Login'); ?>


<?php $__env->startSection('content'); ?>

    <div class="login-box">

        <div class="login-logo">
            <a href="<?php echo e(route('home')); ?>">
                <?php if(isset($setting) && $setting['site_logo']): ?>
                    <img src="<?php echo e(asset('images/'.$setting['site_logo'])); ?>" alt="Logo">
                <?php elseif(isset($setting) && $setting['site_name']): ?>
                    <?php echo e($setting['site_name']); ?>

                <?php else: ?>
                    <b>NEWS</b> PORTAL
                <?php endif; ?>
            </a>
        </div>

        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>
            
            <?php if(session()->has('errorcredentials')): ?>
                <div class="text-center has-error">
                    <span class="help-block">
                        <strong><?php echo session()->get('errorcredentials'); ?></strong>
                    </span>
                </div>
            <?php endif; ?>

            <form action="<?php echo e(route('login')); ?>" method="post">
                <?php echo csrf_field(); ?> 
                
                <div class="form-group has-feedback<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                    <?php if($errors->has('email')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('email')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
                <div class="form-group has-feedback<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                    <?php if($errors->has('password')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('password')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> Remember Me
                            </label>
                        </div>
                    </div>

                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                </div>

            </form>

            <div class="social-auth-links text-center">
                <p>- OR -</p>
                <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
                    Facebook
                </a>
                <a href="<?php echo e(route('login.google')); ?>" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
                    Google+
                </a>
            </div>

            <a href="#">I forgot my password</a><br>
            <a href="<?php echo e(route('register')); ?>" class="text-center">Register a new membership</a>

        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' /* optional */
            });
        });
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('authentication.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>