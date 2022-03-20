<?php $__env->startSection('title', 'News'); ?>

<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('backend/components/datatables.net-bs/css/dataTables.bootstrap.min.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

    <section class="content-header">
        <h1>
            News List
            <small><a href="<?php echo e(route('admin.news.create')); ?>" class="btn btn-block btn-xs btn-success btn-flat"><i class="fa fa-plus"></i> CREATE</a></small>
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
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Hover Data Table</h3>
                    </div>

                    <div class="box-body">
                        <table id="category-table" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Slug</th>
                                    <th>Details</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Is Featured</th>
                                    <th>View</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $__currentLoopData = $newslist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($news->id); ?></td>
                                    <td>
                                        <img src="<?php echo e(asset('images/'.$news->image)); ?>" alt="<?php echo e($news->title); ?>" width="120px">
                                    </td>
                                    <td><?php echo e($news->title); ?></td>
                                    <td><?php echo e($news->slug); ?></td>
                                    <td><?php echo e(str_limit(strip_tags($news->details),300)); ?></td>
                                    <td><?php echo e(@$news->category->name); ?></td>
                                    <td><?php echo e($news->status ? 'Published' : 'Unpublished'); ?></td>
                                    <td><?php echo e($news->featured ? 'Featured' : ''); ?></td>
                                    <td><?php echo e($news->view_count); ?></td>
                                    <td>
                                        <div class="btn-group-vertical">
                                            <a href="" class="btn btn-primary btn-flat"><i class="fa fa-eye"></i></a>
                                            <a href="<?php echo e(route('admin.news.edit',$news->id)); ?>" class="btn btn-warning btn-flat"><i class="fa fa-edit"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-danger btn-flat"
                                                onclick="event.preventDefault();
                                                    document.getElementById('news-delete-form-<?php echo e($news->id); ?>').submit();">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                            <form id="news-delete-form-<?php echo e($news->id); ?>" action="<?php echo e(route('admin.news.destroy',$news->id)); ?>" method="POST" style="display: none;">
                                                <?php echo csrf_field(); ?> 
                                                <?php echo method_field('DELETE'); ?>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>

                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Slug</th>
                                    <th>Details</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Is Featured</th>
                                    <th>View</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                </div>

            </div>

        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('backend/components/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/components/datatables.net-bs/js/dataTables.bootstrap.min.js')); ?>"></script>
    <script>
        $(function(){
            $('#category-table').DataTable();
        })
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('backend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>