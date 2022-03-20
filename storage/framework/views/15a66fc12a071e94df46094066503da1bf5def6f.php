<?php $__env->startSection('title', 'Menus'); ?>

<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('backend/components/datatables.net-bs/css/dataTables.bootstrap.min.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

    <section class="content-header">
        <h1>
            Menu Tables
            <small>
                <a href="<?php echo e(route('admin.menus.create')); ?>" class="btn btn-block btn-sm btn-success btn-flat"><i class="fa fa-plus"></i> ADD MENU</a>
            </small>
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
                        <table id="menu-table" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Order</th>
                                    <th>Parent</th>
                                    <th>Type</th>
                                    <th>URL</th>
                                    <th width="60px">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($menu->id); ?></td>
                                    <td><?php echo e($menu->name); ?></td>
                                    <td><?php echo e($menu->menuorder); ?></td>
                                    <td><?php echo e($menu->parent_id); ?></td>
                                    <td><?php echo e($menu->type); ?></td>
                                    <td><?php echo e($menu->menu_url); ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="<?php echo e(route('admin.menus.edit',$menu->id)); ?>" class="btn btn-warning btn-flat"><i class="fa fa-edit"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-danger btn-flat"
                                                onclick="event.preventDefault();
                                                    document.getElementById('menu-delete-form-<?php echo e($menu->id); ?>').submit();">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                            <form id="menu-delete-form-<?php echo e($menu->id); ?>" action="<?php echo e(route('admin.menus.destroy',$menu->id)); ?>" method="POST" style="display: none;">
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
                                    <th>Name</th>
                                    <th>Order</th>
                                    <th>Parent</th>
                                    <th>Type</th>
                                    <th>URL</th>
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
            $('#menu-table').DataTable();
        })
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('backend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>