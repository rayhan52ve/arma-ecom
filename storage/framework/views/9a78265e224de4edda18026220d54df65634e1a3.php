<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor" style="text-transform:capitalize;"><?php echo e(auth()->user()->name); ?> : Dashboard</h4>
            </div>
            <div class="col-md-7 align-self-center text-end">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb justify-content-end">
                        <li class="breadcrumb-item"><a href="<?php echo e(url('admin/home')); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Info box -->
        <!-- ============================================================== -->
        <div class="row g-0">
            <div class="col-lg-3 col-md-6">
                <a href="<?php echo e(route('admin.user.index')); ?>">
                    <div class="card border">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3 class="text-primary"><i class="fa-solid fa-users-line"></i></h3>
                                            <p class="text-muted">Customers</p>
                                        </div>
                                        <div class="ms-auto">
                                            <h2 class="counter text-primary"><?php echo e($user->where('role','customer')->count()); ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar"
                                            style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6">
                <a href="<?php echo e(route('admin.employeeList')); ?>">
                    <div class="card border">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3 class="text-cyan"><i class="fa-solid fa-user-tie"></i></h3>
                                            <p class="text-muted">Employees</p>
                                        </div>
                                        <div class="ms-auto">
                                            <h2 class="counter text-cyan"><?php echo e($user->where('role','employee')->count()); ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-cyan" role="progressbar"
                                            style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="<?php echo e(route('service.index')); ?>">
                    <div class="card border">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3 class="text-danger"><i class="fa-solid fa-screwdriver-wrench"></i></h3>
                                            <p class="text-muted">Services</p>
                                        </div>
                                        <div class="ms-auto">
                                            <h2 class="counter text-danger"><?php echo e($service->count()); ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar"
                                            style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6">
                <a href="<?php echo e(route('admin.product.index')); ?>">
                    <div class="card border">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3 class="text-purple"><i class="fa-solid fa-cart-shopping"></i></h3>
                                            <p class="text-muted">Products</p>
                                        </div>
                                        <div class="ms-auto">
                                            <h2 class="counter text-purple"><?php echo e($product->count()); ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-purple" role="progressbar"
                                            style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6">
                <a href="<?php echo e(route('service-category.index')); ?>">
                    <div class="card border">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3 class="text-purple"><i class="fa-solid fa-screwdriver-wrench"></i></h3>
                                            <p class="text-muted">Service Categories</p>
                                        </div>
                                        <div class="ms-auto">
                                            <h2 class="counter text-purple"><?php echo e($serviceCategory->count()); ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-purple" role="progressbar"
                                            style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6">
                <a href="<?php echo e(route('admin.productCategory.index')); ?>">
                    <div class="card border">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3 class="text-success"><i class="fa-solid fa-icons"></i></h3>
                                            <p class="text-muted">Product Categories</p>
                                        </div>
                                        <div class="ms-auto">
                                            <h2 class="counter text-success"><?php echo e($productCategory->count()); ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar"
                                            style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6">
                <a href="<?php echo e(route('admin.pendingOrderList')); ?>">
                    <div class="card border">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3 class="text-info"><i class="fa-solid fa-truck"></i></h3>
                                            <p class="text-muted">Service Orders(Pending)</p>
                                        </div>
                                        <div class="ms-auto">
                                            <h2 class="counter text-info"><?php echo e($order->where('status',1)->count()); ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-info" role="progressbar"
                                            style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6">
                <a href="<?php echo e(route('admin.pendingProductOrder')); ?>">
                    <div class="card border">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3 class="text-dark"><i class="fa-solid fa-truck"></i></h3>
                                            <p class="text-muted">Product Orders(Pending)</p>
                                        </div>
                                        <div class="ms-auto">
                                            <h2 class="counter text-dark"><?php echo e($productOrder->where('status',1)->count()); ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-dark" role="progressbar"
                                            style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="<?php echo e(route('admin.acceptedOrderList')); ?>">
                    <div class="card border">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3 class="text-primary"><i class="fa-solid fa-truck"></i></h3>
                                            <p class="text-muted">Service Orders(Running)</p>
                                        </div>
                                        <div class="ms-auto">
                                            <h2 class="counter text-primary"><?php echo e($order->where('status',2)->count()); ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar"
                                            style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6">
                <a href="<?php echo e(route('admin.acceptedProductOrder')); ?>">
                    <div class="card border">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3 class="text-cyan"><i class="fa-solid fa-truck"></i></h3>
                                            <p class="text-muted">Product Orders(Running)</p>
                                        </div>
                                        <div class="ms-auto">
                                            <h2 class="counter text-cyan"><?php echo e($productOrder->where('status',2)->count()); ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-cyan" role="progressbar"
                                            style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="<?php echo e(route('admin.completedOrderList')); ?>">
                    <div class="card border">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3 class="text-success"><i class="fa-solid fa-truck"></i></h3>
                                            <p class="text-muted">Service Orders(Completed)</p>
                                        </div>
                                        <div class="ms-auto">
                                            <h2 class="counter text-success"><?php echo e($order->where('status',4)->count()); ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar"
                                            style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6">
                <a href="<?php echo e(route('admin.completedProductOrder')); ?>">
                    <div class="card border">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3 class="text-warning"><i class="fa-solid fa-truck"></i></h3>
                                            <p class="text-muted">Product Orders(Completed)</</p>
                                        </div>
                                        <div class="ms-auto">
                                            <h2 class="counter text-warning"><?php echo e($productOrder->where('status',4)->count()); ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar"
                                            style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="<?php echo e(route('admin.declinedOrderList')); ?>">
                    <div class="card border">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3 class="text-purple"><i class="fa-solid fa-truck"></i></h3>
                                            <p class="text-muted">Service Orders(Declined)</</p>
                                        </div>
                                        <div class="ms-auto">
                                            <h2 class="counter text-purple"><?php echo e($order->where('status',3)->count()); ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-purple" role="progressbar"
                                            style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6">
                <a href="<?php echo e(route('admin.declinedProductOrder')); ?>">
                    <div class="card border">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3 class="text-danger"><i class="fa-solid fa-truck"></i></h3>
                                            <p class="text-muted">Product Orders(Declined)</p>
                                        </div>
                                        <div class="ms-auto">
                                            <h2 class="counter text-danger"><?php echo e($productOrder->where('status',3)->count()); ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar"
                                            style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6">
                <a href="<?php echo e(route('admin.payroll.index')); ?>">
                    <div class="card border">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3 class="text-info"><i class="fa-solid fa-sack-dollar"></i></h3>
                                            <p class="text-muted">Payrolls</p>
                                        </div>
                                        <div class="ms-auto">
                                            <h2 class="counter text-info">N/A</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-info" role="progressbar"
                                            style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6">
                <a href="<?php echo e(route('admin.expenseType.index')); ?>">
                    <div class="card border">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3 class="text-dark"><i class="fa-solid fa-comments-dollar"></i></h3>
                                            <p class="text-muted">Expense Types</p>
                                        </div>
                                        <div class="ms-auto">
                                            <h2 class="counter text-dark"><?php echo e($expenseType->count()); ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-dark" role="progressbar"
                                            style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6">
                <a href="<?php echo e(route('admin.salesReport')); ?>">
                    <div class="card border">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3 class="text-primary"><i class="fa-solid fa-money-bill-trend-up"></i></h3>
                                            <p class="text-muted">Service Sales Report</p>
                                        </div>
                                        <div class="ms-auto">
                                            <h2 class="counter text-primary">N/A</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar"
                                            style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="<?php echo e(route('admin.expenseReport')); ?>">
                    <div class="card border">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3 class="text-cyan"><i class="fa-solid fa-money-bill-trend-up"></i></h3>
                                            <p class="text-muted">Total Expense Report</p>
                                        </div>
                                        <div class="ms-auto">
                                            <h2 class="counter text-cyan">N/A</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-cyan" role="progressbar"
                                            style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6">
                <a href="<?php echo e(route('admin.expenseReport')); ?>">
                    <div class="card border">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3 class="text-success"><i class="fa-solid fa-coins"></i></h3>
                                            <p class="text-muted">Total Servive Profit</p>
                                        </div>
                                        <div class="ms-auto">
                                            <h2 class="counter text-success"><?php echo e($balance); ?> &#2547</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar"
                                            style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

        </div>

        <!-- .right-sidebar -->

        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('super_admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\arma-ecom\resources\views/super_admin/home/index.blade.php ENDPATH**/ ?>