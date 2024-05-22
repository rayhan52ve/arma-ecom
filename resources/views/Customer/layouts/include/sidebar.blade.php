<div class="scroll-sidebar">
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">
        <ul id="sidebarnav">
            <li class="user-pro"> <a class="waves-effect waves-dark" href="{{ route('customer.profile') }}"
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
            <li> <a class="waves-effect waves-dark" href="{{ route('customer.home') }}" aria-expanded="false"><i
                        class="icon-speedometer"></i><span class="hide-menu">Dashboard</span></a></li>
            {{--
            <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i
                        class="ti-layout-grid2"></i><span class="hide-menu">Service Find</span></a></li> --}}


            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                        class="ti-layout-grid2"></i><span class="hide-menu">
                        My Orders
                    </span></a>
                <ul aria-expanded="false" class="collapse">
                    <li><a href="{{ route('customer.orderList') }}">
                            Services
                        </a></li>
                    <li><a href="{{ route('customer.productOrderList') }}">
                            Products
                        </a></li>
                </ul>
            </li>

            </li>
        </ul>
    </nav>
    <!-- End Sidebar navigation -->
</div>
