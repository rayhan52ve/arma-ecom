<?php
    $totalPayment = App\Models\Payment::sum('amount');
    $totalPayroll = App\Models\Payroll::sum('payroll');
    $balance = $totalPayment - $totalPayroll;
?>
<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <div class="navbar-header text-center" style="padding:0px">
            <a style="width: 220px" class="navbar-brand"
                <?php if(auth()->user()->role == 'admin'): ?> href="<?php echo e(url('/')); ?>" <?php elseif(auth()->user()->role == 'employee'): ?> href="<?php echo e(url('employee/home')); ?>" <?php else: ?> href="<?php echo e(url('/home')); ?>" <?php endif; ?>>
                <!-- Logo icon --><b>
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <?php
                        $logo = App\Models\Logo::latest()->first();
                    ?>
                    
                    <!-- Light Logo icon -->
                    <img src="<?php echo e(asset($logo->logo_image ?? null)); ?>" alt="homepage" width="150px" class="light-logo" />
                </b>
                <!--End Logo icon -->
                <!-- Logo text --></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav me-auto">
                <!-- This is  -->
                <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark"
                        href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                <li class="nav-item"> <a
                        class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark"
                        href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                <!-- ============================================================== -->
                <!-- Search -->
                <!-- ============================================================== -->
                <li class="nav-item">
                    <div class="app-search d-none d-md-block d-lg-block">
                        <h6 class="pt-4 mx-5"><strong>Balance: <?php echo e($balance); ?> Taka</strong></h6>
                    </div>
                </li>
            </ul>
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
            <ul class="navbar-nav my-lg-0">
                <!-- ============================================================== -->
                <!-- Comment -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- End Comment -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Messages -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- End Messages -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- mega menu -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- End mega menu -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- User Profile -->
                <!-- ============================================================== -->

                

                <li class="nav-item dropdown u-pro">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="#"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php if(@auth()->user()->userDetail->image): ?>
                            <img src="<?php echo e(asset('uploads/user/' . auth()->user()->userDetail->image)); ?>"
                                class="rounded-circle">
                        <?php else: ?>
                            <img src="<?php echo e(asset('assets/avatar.png')); ?>" class="rounded-circle">
                        <?php endif; ?>
                        <span class="hidden-md-down"><?php echo e(auth()->user()->name); ?> &nbsp;<i class="fa fa-angle-down"></i></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end animated flipInY">
                        <!-- text-->
                        <a href="<?php echo e(route('admin.profile')); ?>" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                        <!-- text-->
                        <a href="javascript:void(0)" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>
                        <!-- text-->
                        
                        <!-- text-->
                        
                        <!-- text-->
                        
                        <!-- text-->
                        
                        <!-- text-->
                        <a href="<?php echo e(route('all.logout')); ?>" class="dropdown-item"><i class="fa fa-power-off"></i>
                            Logout</a>
                        <!-- text-->
                    </div>
                </li>
                <!-- ============================================================== -->
                <!-- End User Profile -->
                <!-- ============================================================== -->
                <li class="nav-item right-side-toggle"> <a class="nav-link  waves-effect waves-light"
                        href=""></a></li>
            </ul>
        </div>
    </nav>
</header>
<?php /**PATH C:\laragon\www\arma-ecom\resources\views/super_admin/include/header.blade.php ENDPATH**/ ?>