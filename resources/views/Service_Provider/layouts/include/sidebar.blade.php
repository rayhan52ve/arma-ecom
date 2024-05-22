<div class="scroll-sidebar">
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">
        <ul id="sidebarnav">
            <li class="user-pro"> <a class="waves-effect waves-dark" href="{{ route('serviceProvider.profile') }}"
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
            <li> <a class="waves-effect waves-dark" href="{{ route('serviceProvider.home') }}" aria-expanded="false"><i
                        class="icon-speedometer"></i><span class="hide-menu">Dashboardh</span></a>
            </li>
            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                        class="ti-layout-grid2"></i><span class="hide-menu">
                        @if (session()->get('language') == 'bangla')
                            Assigned Orders
                        @else
                            Assigned Orders
                        @endif
                    </span></a>
                <ul aria-expanded="false" class="collapse">
                    <li><a href="{{ route('serviceProvider.acceptedOrderList') }}">
                            @if (session()->get('language') == 'bangla')
                                Running Orders
                            @else
                                Running Orders
                            @endif
                        </a></li>
                    <li><a href="{{ route('serviceProvider.completedOrderList') }}">
                            @if (session()->get('language') == 'bangla')
                                Completed Orders
                            @else
                                Completed Orders
                            @endif
                        </a></li>
                </ul>
            </li>

            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                        class="ti-layout-grid2"></i><span class="hide-menu">
                        @if (session()->get('language') == 'bangla')
                            Product Order
                        @else
                            Product Order
                        @endif
                    </span></a>
                <ul aria-expanded="false" class="collapse">
                    <li><a href="{{ route('serviceProvider.pendingProductOrder') }}">
                            @if (session()->get('language') == 'bangla')
                                Pending Orders
                            @else
                                Pending Orders
                            @endif
                        </a></li>
                    <li><a href="{{ route('serviceProvider.acceptedProductOrder') }}">
                            @if (session()->get('language') == 'bangla')
                                Running Orders
                            @else
                                Running Orders
                            @endif
                        </a></li>
                    <li><a href="{{ route('serviceProvider.declinedProductOrder') }}">
                            @if (session()->get('language') == 'bangla')
                                Declined Orders
                            @else
                                Declined Orders
                            @endif
                        </a></li>
                    <li><a href="{{ route('serviceProvider.completedProductOrder') }}">
                            @if (session()->get('language') == 'bangla')
                                Completed Orders
                            @else
                                Completed Orders
                            @endif
                        </a></li>
                </ul>
            </li>
            {{--
            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                        class="ti-layout-grid2"></i><span class="hide-menu">
                        @if (session()->get('language') == 'bangla')
                            বেতন
                        @else
                            Pay Roll
                        @endif
                    </span></a>
                <ul aria-expanded="false" class="collapse">
                    <li><a href="{{ route('logoimg') }}">
                            @if (session()->get('language') == 'bangla')
                                লোগো সেটিং
                            @else
                                Logo Setting
                            @endif
                        </a></li>
                    <li><a href="{{ route('cutting.ground') }}">
                            @if (session()->get('language') == 'bangla')
                                মাটি কাটা
                            @else
                                Cutting Ground
                            @endif
                        </a></li>
                    <li><a href="{{ route('raw.reza') }}">
                            @if (session()->get('language') == 'bangla')
                                কাঁচারেজা
                            @else
                                Raw Reza
                            @endif
                        </a></li>
                    <li><a href="{{ route('load.mistri') }}">
                            @if (session()->get('language') == 'bangla')
                                লোর্ড মিস্ত্রি
                            @else
                                Load Mistri
                            @endif
                        </a></li>
                </ul>
            </li>

            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                        class="ti-layout-grid2"></i><span class="hide-menu">
                        @if (session()->get('language') == 'bangla')
                            খরচ
                        @else
                            Expense
                        @endif
                    </span></a>
                <ul aria-expanded="false" class="collapse">
                    <li><a href="{{ route('expense.type') }}">
                            @if (session()->get('language') == 'bangla')
                                খরচ টাইপ
                            @else
                                Expense Type
                            @endif
                        </a></li>
                    <li><a href="{{ route('create.expense') }}">
                            @if (session()->get('language') == 'bangla')
                                খরচ খাত তৈরি
                            @else
                                Create Expense
                            @endif
                        </a></li>
                </ul>
            </li> --}}



            </li>
        </ul>
    </nav>
    <!-- End Sidebar navigation -->
</div>
