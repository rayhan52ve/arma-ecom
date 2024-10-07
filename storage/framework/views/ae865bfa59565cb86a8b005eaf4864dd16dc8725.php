<div class="scroll-sidebar">
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">
        <ul id="sidebarnav">
            <li class="user-pro"> <a class="waves-effect waves-dark" href="<?php echo e(route('admin.profile')); ?>"
                    aria-expanded="false">
                    <?php if(@auth()->user()->userDetail->image): ?>
                        <img src="<?php echo e(asset('uploads/user/' . auth()->user()->userDetail->image)); ?>"
                            class="rounded-circle">
                    <?php else: ?>
                        <img src="<?php echo e(asset('assets/avatar.png')); ?>" class="rounded-circle">
                    <?php endif; ?>
                    <span class="hide-menu"><?php echo e(auth()->user()->name); ?></span>
                </a>
            </li>
            <li>
                <a class="waves-effect waves-dark" href="<?php echo e(url('admin/home')); ?>" aria-expanded="false"><i
                        class="icon-speedometer"></i><span class="hide-menu">Dashboard</span></a>
            </li>

            <?php if(auth()->user()->role == 'admin'): ?>

                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fa-solid fa-screwdriver-wrench"></i><span class="hide-menu">
                            <?php if(session()->get('language') == 'bangla'): ?>
                                Manage Services
                            <?php else: ?>
                                Manage Services
                            <?php endif; ?>
                        </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?php echo e(route('service-category.index')); ?>">
                                <?php if(session()->get('language') == 'bangla'): ?>
                                    Service Category
                                <?php else: ?>
                                    Service Category
                                <?php endif; ?>
                            </a></li>
                        
                        <li><a href="<?php echo e(route('service.index')); ?>">
                                <?php if(session()->get('language') == 'bangla'): ?>
                                    Services
                                <?php else: ?>
                                    Services
                                <?php endif; ?>
                            </a></li>
                    </ul>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fa-solid fa-cart-shopping"></i><span class="hide-menu">
                            <?php if(session()->get('language') == 'bangla'): ?>
                                Manage Products
                            <?php else: ?>
                                Manage Products
                            <?php endif; ?>
                        </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?php echo e(route('admin.productCategory.index')); ?>">
                                <?php if(session()->get('language') == 'bangla'): ?>
                                    Product Category
                                <?php else: ?>
                                    Product Category
                                <?php endif; ?>
                            </a></li>
                        <li><a href="<?php echo e(route('admin.productSubCategory.index')); ?>">
                                <?php if(session()->get('language') == 'bangla'): ?>
                                    Product Sub Category
                                <?php else: ?>
                                    Product Sub Category
                                <?php endif; ?>
                            </a></li>
                        <li><a href="<?php echo e(route('admin.product.index')); ?>">
                                <?php if(session()->get('language') == 'bangla'): ?>
                                    Products
                                <?php else: ?>
                                    Products
                                <?php endif; ?>
                            </a></li>
                    </ul>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fa-solid fa-users"></i><span class="hide-menu">
                            <?php if(session()->get('language') == 'bangla'): ?>
                                Manage User
                            <?php else: ?>
                                Manage User
                            <?php endif; ?>
                        </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?php echo e(route('admin.user.index')); ?>">
                                <?php if(session()->get('language') == 'bangla'): ?>
                                    Customer List
                                <?php else: ?>
                                    Customer List
                                <?php endif; ?>
                            </a></li>

                        <li><a href="<?php echo e(route('admin.employeeList')); ?>">
                                <?php if(session()->get('language') == 'bangla'): ?>
                                    Employee(In)
                                <?php else: ?>
                                    Employee(In)
                                <?php endif; ?>
                            </a></li>
                        <li><a href="<?php echo e(route('admin.employeeOutHouse')); ?>">
                                <?php if(session()->get('language') == 'bangla'): ?>
                                    Employee(Out)
                                <?php else: ?>
                                    Employee(Out)
                                <?php endif; ?>
                            </a></li>
                        <li><a href="<?php echo e(route('admin.user.create')); ?>">
                                <?php if(session()->get('language') == 'bangla'): ?>
                                    Create User
                                <?php else: ?>
                                    Create User
                                <?php endif; ?>
                            </a></li>
                    </ul>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fa-solid fa-wrench"></i><span class="hide-menu">
                            <?php if(session()->get('language') == 'bangla'): ?>
                                Service Order
                            <?php else: ?>
                                Service Order
                            <?php endif; ?>
                        </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?php echo e(route('admin.pendingOrderList')); ?>">
                                <?php if(session()->get('language') == 'bangla'): ?>
                                    Pending Orders
                                <?php else: ?>
                                    Pending Orders
                                <?php endif; ?>
                            </a></li>
                        <li><a href="<?php echo e(route('admin.acceptedOrderList')); ?>">
                                <?php if(session()->get('language') == 'bangla'): ?>
                                    Running Orders
                                <?php else: ?>
                                    Running Orders
                                <?php endif; ?>
                            </a></li>
                        <li><a href="<?php echo e(route('admin.declinedOrderList')); ?>">
                                <?php if(session()->get('language') == 'bangla'): ?>
                                    Declined Orders
                                <?php else: ?>
                                    Declined Orders
                                <?php endif; ?>
                            </a></li>
                        <li><a href="<?php echo e(route('admin.completedOrderList')); ?>">
                                <?php if(session()->get('language') == 'bangla'): ?>
                                    Completed Orders
                                <?php else: ?>
                                    Completed Orders
                                <?php endif; ?>
                            </a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fa-solid fa-truck"></i><span class="hide-menu">
                            <?php if(session()->get('language') == 'bangla'): ?>
                                Product Order
                            <?php else: ?>
                                Product Order
                            <?php endif; ?>
                        </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?php echo e(route('admin.pendingProductOrder')); ?>">
                                <?php if(session()->get('language') == 'bangla'): ?>
                                    Pending Orders
                                <?php else: ?>
                                    Pending Orders
                                <?php endif; ?>
                            </a></li>
                        <li><a href="<?php echo e(route('admin.acceptedProductOrder')); ?>">
                                <?php if(session()->get('language') == 'bangla'): ?>
                                    Running Orders
                                <?php else: ?>
                                    Running Orders
                                <?php endif; ?>
                            </a></li>
                        <li><a href="<?php echo e(route('admin.declinedProductOrder')); ?>">
                                <?php if(session()->get('language') == 'bangla'): ?>
                                    Declined Orders
                                <?php else: ?>
                                    Declined Orders
                                <?php endif; ?>
                            </a></li>
                        <li><a href="<?php echo e(route('admin.completedProductOrder')); ?>">
                                <?php if(session()->get('language') == 'bangla'): ?>
                                    Completed Orders
                                <?php else: ?>
                                    Completed Orders
                                <?php endif; ?>
                            </a></li>
                    </ul>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fa-solid fa-sack-dollar"></i></<span class="hide-menu">
                        <?php if(session()->get('language') == 'bangla'): ?>
                            Payroll
                        <?php else: ?>
                            Payroll
                        <?php endif; ?>
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?php echo e(route('admin.payroll.index')); ?>">
                                <?php if(session()->get('language') == 'bangla'): ?>
                                    Pay
                                <?php else: ?>
                                    Pay
                                <?php endif; ?>
                            </a></li>
                        <li><a href="<?php echo e(route('admin.payrollHistory')); ?>">
                                <?php if(session()->get('language') == 'bangla'): ?>
                                    History
                                <?php else: ?>
                                    History
                                <?php endif; ?>
                            </a></li>
                    </ul>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fa-solid fa-comments-dollar"></i><span class="hide-menu">
                            <?php if(session()->get('language') == 'bangla'): ?>
                                Expenses
                            <?php else: ?>
                                Expenses
                            <?php endif; ?>
                        </span></a>
                    <ul aria-expanded="false" class="collapse">

                        <li><a href="<?php echo e(route('admin.expenseType.index')); ?>">
                                <?php if(session()->get('language') == 'bangla'): ?>
                                    Expense Type
                                <?php else: ?>
                                    Expense Type
                                <?php endif; ?>
                            </a></li>
                        <li><a href="<?php echo e(route('admin.expense.create')); ?>">
                                <?php if(session()->get('language') == 'bangla'): ?>
                                    Expense Entry
                                <?php else: ?>
                                    Expense Entry
                                <?php endif; ?>
                            </a></li>
                        <li><a href="<?php echo e(route('admin.expense.index')); ?>">
                                <?php if(session()->get('language') == 'bangla'): ?>
                                    Expense History
                                <?php else: ?>
                                    Expense History
                                <?php endif; ?>
                            </a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fa-regular fa-comment"></i><span class="hide-menu">
                            <?php if(session()->get('language') == 'bangla'): ?>
                                Messages
                            <?php else: ?>
                                Messages
                            <?php endif; ?>
                        </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?php echo e(route('chat.index')); ?>">
                                <?php if(session()->get('language') == 'bangla'): ?>
                                    Chat
                                <?php else: ?>
                                    Chat
                                <?php endif; ?>
                            </a></li>
                    </ul>
                </li>

                <li>
                    <a class="waves-effect waves-dark" href="<?php echo e(route('admin.coupon.index')); ?>"
                        aria-expanded="false"><i class="fa-solid fa-ticket"></i> <span
                            class="hide-menu">Coupon</span></a>
                </li>

                <li>
                    <a class="waves-effect waves-dark" href="<?php echo e(route('admin.offer.index')); ?>"
                        aria-expanded="false"><i class="fa-solid fa-ticket-simple"></i> <span
                            class="hide-menu">Offer</span></a>
                </li>

                <li>
                    <a class="waves-effect waves-dark" href="<?php echo e(route('admin.career.index')); ?>"
                        aria-expanded="false"><i class="fa-solid fa-ticket-simple"></i> <span
                            class="hide-menu">CV</span></a>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fa-solid fa-clipboard-list"></i> <span class="hide-menu">
                            <?php if(session()->get('language') == 'bangla'): ?>
                                Reports
                            <?php else: ?>
                                Reports
                            <?php endif; ?>
                        </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?php echo e(route('admin.salesReport')); ?>">
                                <?php if(session()->get('language') == 'bangla'): ?>
                                    Service Sales
                                <?php else: ?>
                                    Service Sales
                                <?php endif; ?>
                            </a></li>
                        <li><a href="<?php echo e(route('admin.productSalesReport')); ?>">
                                <?php if(session()->get('language') == 'bangla'): ?>
                                    Product Sales
                                <?php else: ?>
                                    Product Sales
                                <?php endif; ?>
                            </a></li>
                        <li><a href="<?php echo e(route('admin.servicePayReport')); ?>">
                                <?php if(session()->get('language') == 'bangla'): ?>
                                    Service Pay
                                <?php else: ?>
                                    Service Pay
                                <?php endif; ?>
                            </a></li>
                        <li><a href="<?php echo e(route('admin.expenseReport')); ?>">
                                <?php if(session()->get('language') == 'bangla'): ?>
                                    Expense
                                <?php else: ?>
                                    Expense
                                <?php endif; ?>
                            </a></li>
                        <li><a href="<?php echo e(route('admin.serviceProfitReport')); ?>">
                                <?php if(session()->get('language') == 'bangla'): ?>
                                    Service Profit
                                <?php else: ?>
                                    Service Profit
                                <?php endif; ?>
                            </a></li>

                    </ul>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fa-solid fa-gear"></i><span class="hide-menu">
                            <?php if(session()->get('language') == 'bangla'): ?>
                                Settings
                            <?php else: ?>
                                Settings
                            <?php endif; ?>
                        </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?php echo e(route('logoimg')); ?>">
                                <?php if(session()->get('language') == 'bangla'): ?>
                                    লোগো সেটিং
                                <?php else: ?>
                                    Logo
                                <?php endif; ?>
                            </a></li>
                        <li><a href="<?php echo e(route('admin.banner.index')); ?>">
                                <?php if(session()->get('language') == 'bangla'): ?>
                                    Banner
                                <?php else: ?>
                                    Banner
                                <?php endif; ?>
                            </a></li>
                        <li><a href="<?php echo e(route('admin.aboutUs.index')); ?>">
                                <?php if(session()->get('language') == 'bangla'): ?>
                                    About Us
                                <?php else: ?>
                                    About Us
                                <?php endif; ?>
                            </a></li>
                        <li><a href="<?php echo e(route('admin.websiteInfo.index')); ?>">
                                <?php if(session()->get('language') == 'bangla'): ?>
                                    Website Info
                                <?php else: ?>
                                    Website Info
                                <?php endif; ?>
                            </a></li>
                    </ul>
                </li>
            <?php else: ?>
            <?php endif; ?>



            </li>
        </ul>
    </nav>
    <!-- End Sidebar navigation -->
</div>
<?php /**PATH C:\laragon\www\arma-ecom\resources\views/super_admin/include/sidebar.blade.php ENDPATH**/ ?>