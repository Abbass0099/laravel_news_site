<?php $__env->startSection('title', 'Setting Breaking News'); ?>

<?php $__env->startSection('content'); ?>

    <section class="content-header">
        <h1>
            Breaking News Setting
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">General Elements</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">

            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Select Category of Breaking News</h3>
                    </div>

                    <form action="<?php echo e(route('admin.settings.breakingnews.store')); ?>" method="POST" role="form">
                        <?php echo csrf_field(); ?>

                        <div class="box-body">

                            <div class="form-group">
                                <label>Category</label>
                                <select name="breaking_news_category_id" class="form-control" style="width: 100%;">
                                    <option selected disabled> --Select Category-- </option>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($category->id); ?>" <?php if($setting->breaking_news_category_id==$category->id): ?><?php echo e('selected'); ?><?php endif; ?>><?php echo e($category->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary btn-flat">UPDATE</button>
                        </div>

                    </form>

                </div>
            </div>
                
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>