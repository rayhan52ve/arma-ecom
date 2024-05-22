<div class="scroll-sidebar">
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">
        <ul id="sidebarnav">
            <li class="user-pro"> <a class="waves-effect waves-dark" href="{{ route('admin.profile') }}"
                    aria-expanded="false">
                    @if (@auth()->user()->userDetail->image)
                        <img src="{{ asset('uploads/user/' . auth()->user()->userDetail->image) }}"
                            class="rounded-circle">
                    @else
                        <img src="{{ asset('assets/avatar.png') }}" class="rounded-circle">
                    @endif
                    <span class="hide-menu">{{ auth()->user()->name }}</span>
                </a>
            </li>
            <li>
                <a class="waves-effect waves-dark" href="{{ url('admin/home') }}" aria-expanded="false"><i
                        class="icon-speedometer"></i><span class="hide-menu">Dashboard</span></a>
            </li>

            @if (auth()->user()->role == 'admin')

                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fa-solid fa-screwdriver-wrench"></i><span class="hide-menu">
                            @if (session()->get('language') == 'bangla')
                                Manage Services
                            @else
                                Manage Services
                            @endif
                        </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('service-category.index') }}">
                                @if (session()->get('language') == 'bangla')
                                    Service Category
                                @else
                                    Service Category
                                @endif
                            </a></li>
                        {{-- <li><a href="{{ route('service-sub-category.index') }}">
                                @if (session()->get('language') == 'bangla')
                                    Service Sub Category
                                @else
                                    Service Sub Category
                                @endif
                            </a></li> --}}
                        <li><a href="{{ route('service.index') }}">
                                @if (session()->get('language') == 'bangla')
                                    Services
                                @else
                                    Services
                                @endif
                            </a></li>
                    </ul>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fa-solid fa-cart-shopping"></i><span class="hide-menu">
                            @if (session()->get('language') == 'bangla')
                                Manage Products
                            @else
                                Manage Products
                            @endif
                        </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('admin.productCategory.index') }}">
                                @if (session()->get('language') == 'bangla')
                                    Product Category
                                @else
                                    Product Category
                                @endif
                            </a></li>
                        <li><a href="{{ route('admin.productSubCategory.index') }}">
                                @if (session()->get('language') == 'bangla')
                                    Product Sub Category
                                @else
                                    Product Sub Category
                                @endif
                            </a></li>
                        <li><a href="{{ route('admin.product.index') }}">
                                @if (session()->get('language') == 'bangla')
                                    Products
                                @else
                                    Products
                                @endif
                            </a></li>
                    </ul>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fa-solid fa-users"></i><span class="hide-menu">
                            @if (session()->get('language') == 'bangla')
                                Manage User
                            @else
                                Manage User
                            @endif
                        </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('admin.user.index') }}">
                                @if (session()->get('language') == 'bangla')
                                    Customer List
                                @else
                                    Customer List
                                @endif
                            </a></li>

                        <li><a href="{{ route('admin.employeeList') }}">
                                @if (session()->get('language') == 'bangla')
                                    Employee(In)
                                @else
                                    Employee(In)
                                @endif
                            </a></li>
                        <li><a href="{{ route('admin.employeeOutHouse') }}">
                                @if (session()->get('language') == 'bangla')
                                    Employee(Out)
                                @else
                                    Employee(Out)
                                @endif
                            </a></li>
                        <li><a href="{{ route('admin.user.create') }}">
                                @if (session()->get('language') == 'bangla')
                                    Create User
                                @else
                                    Create User
                                @endif
                            </a></li>
                    </ul>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fa-solid fa-wrench"></i><span class="hide-menu">
                            @if (session()->get('language') == 'bangla')
                                Service Order
                            @else
                                Service Order
                            @endif
                        </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('admin.pendingOrderList') }}">
                                @if (session()->get('language') == 'bangla')
                                    Pending Orders
                                @else
                                    Pending Orders
                                @endif
                            </a></li>
                        <li><a href="{{ route('admin.acceptedOrderList') }}">
                                @if (session()->get('language') == 'bangla')
                                    Running Orders
                                @else
                                    Running Orders
                                @endif
                            </a></li>
                        <li><a href="{{ route('admin.declinedOrderList') }}">
                                @if (session()->get('language') == 'bangla')
                                    Declined Orders
                                @else
                                    Declined Orders
                                @endif
                            </a></li>
                        <li><a href="{{ route('admin.completedOrderList') }}">
                                @if (session()->get('language') == 'bangla')
                                    Completed Orders
                                @else
                                    Completed Orders
                                @endif
                            </a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fa-solid fa-truck"></i><span class="hide-menu">
                            @if (session()->get('language') == 'bangla')
                                Product Order
                            @else
                                Product Order
                            @endif
                        </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('admin.pendingProductOrder') }}">
                                @if (session()->get('language') == 'bangla')
                                    Pending Orders
                                @else
                                    Pending Orders
                                @endif
                            </a></li>
                        <li><a href="{{ route('admin.acceptedProductOrder') }}">
                                @if (session()->get('language') == 'bangla')
                                    Running Orders
                                @else
                                    Running Orders
                                @endif
                            </a></li>
                        <li><a href="{{ route('admin.declinedProductOrder') }}">
                                @if (session()->get('language') == 'bangla')
                                    Declined Orders
                                @else
                                    Declined Orders
                                @endif
                            </a></li>
                        <li><a href="{{ route('admin.completedProductOrder') }}">
                                @if (session()->get('language') == 'bangla')
                                    Completed Orders
                                @else
                                    Completed Orders
                                @endif
                            </a></li>
                    </ul>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fa-solid fa-sack-dollar"></i></<span class="hide-menu">
                        @if (session()->get('language') == 'bangla')
                            Payroll
                        @else
                            Payroll
                        @endif
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('admin.payroll.index') }}">
                                @if (session()->get('language') == 'bangla')
                                    Pay
                                @else
                                    Pay
                                @endif
                            </a></li>
                        <li><a href="{{ route('admin.payrollHistory') }}">
                                @if (session()->get('language') == 'bangla')
                                    History
                                @else
                                    History
                                @endif
                            </a></li>
                    </ul>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fa-solid fa-comments-dollar"></i><span class="hide-menu">
                            @if (session()->get('language') == 'bangla')
                                Expenses
                            @else
                                Expenses
                            @endif
                        </span></a>
                    <ul aria-expanded="false" class="collapse">

                        <li><a href="{{ route('admin.expenseType.index') }}">
                                @if (session()->get('language') == 'bangla')
                                    Expense Type
                                @else
                                    Expense Type
                                @endif
                            </a></li>
                        <li><a href="{{ route('admin.expense.create') }}">
                                @if (session()->get('language') == 'bangla')
                                    Expense Entry
                                @else
                                    Expense Entry
                                @endif
                            </a></li>
                        <li><a href="{{ route('admin.expense.index') }}">
                                @if (session()->get('language') == 'bangla')
                                    Expense History
                                @else
                                    Expense History
                                @endif
                            </a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fa-regular fa-comment"></i><span class="hide-menu">
                            @if (session()->get('language') == 'bangla')
                                Messages
                            @else
                                Messages
                            @endif
                        </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('chat.index') }}">
                                @if (session()->get('language') == 'bangla')
                                    Chat
                                @else
                                    Chat
                                @endif
                            </a></li>
                    </ul>
                </li>

                <li>
                    <a class="waves-effect waves-dark" href="{{ route('admin.coupon.index') }}"
                        aria-expanded="false"><i class="fa-solid fa-ticket"></i> <span
                            class="hide-menu">Coupon</span></a>
                </li>

                <li>
                    <a class="waves-effect waves-dark" href="{{ route('admin.offer.index') }}"
                        aria-expanded="false"><i class="fa-solid fa-ticket-simple"></i> <span
                            class="hide-menu">Offer</span></a>
                </li>

                <li>
                    <a class="waves-effect waves-dark" href="{{ route('admin.career.index') }}"
                        aria-expanded="false"><i class="fa-solid fa-ticket-simple"></i> <span
                            class="hide-menu">CV</span></a>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fa-solid fa-clipboard-list"></i> <span class="hide-menu">
                            @if (session()->get('language') == 'bangla')
                                Reports
                            @else
                                Reports
                            @endif
                        </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('admin.salesReport') }}">
                                @if (session()->get('language') == 'bangla')
                                    Service Sales
                                @else
                                    Service Sales
                                @endif
                            </a></li>
                        <li><a href="{{ route('admin.productSalesReport') }}">
                                @if (session()->get('language') == 'bangla')
                                    Product Sales
                                @else
                                    Product Sales
                                @endif
                            </a></li>
                        <li><a href="{{ route('admin.servicePayReport') }}">
                                @if (session()->get('language') == 'bangla')
                                    Service Pay
                                @else
                                    Service Pay
                                @endif
                            </a></li>
                        <li><a href="{{ route('admin.expenseReport') }}">
                                @if (session()->get('language') == 'bangla')
                                    Expense
                                @else
                                    Expense
                                @endif
                            </a></li>
                        <li><a href="{{ route('admin.serviceProfitReport') }}">
                                @if (session()->get('language') == 'bangla')
                                    Service Profit
                                @else
                                    Service Profit
                                @endif
                            </a></li>

                    </ul>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fa-solid fa-gear"></i><span class="hide-menu">
                            @if (session()->get('language') == 'bangla')
                                Settings
                            @else
                                Settings
                            @endif
                        </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('logoimg') }}">
                                @if (session()->get('language') == 'bangla')
                                    লোগো সেটিং
                                @else
                                    Logo
                                @endif
                            </a></li>
                        <li><a href="{{ route('admin.banner.index') }}">
                                @if (session()->get('language') == 'bangla')
                                    Banner
                                @else
                                    Banner
                                @endif
                            </a></li>
                        <li><a href="{{ route('admin.aboutUs.index') }}">
                                @if (session()->get('language') == 'bangla')
                                    About Us
                                @else
                                    About Us
                                @endif
                            </a></li>
                        <li><a href="{{ route('admin.websiteInfo.index') }}">
                                @if (session()->get('language') == 'bangla')
                                    Website Info
                                @else
                                    Website Info
                                @endif
                            </a></li>
                    </ul>
                </li>
            @else
            @endif



            </li>
        </ul>
    </nav>
    <!-- End Sidebar navigation -->
</div>
