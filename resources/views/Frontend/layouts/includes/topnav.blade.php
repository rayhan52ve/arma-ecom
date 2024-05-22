<div class="topbar white topbar-padding">
    <div class="container">
        <div class="topbar-left-items">
            <ul class="toplist toppadding pull-left paddtop1">
                <li class="rightl">Customer Care</li>
                <li>{{ @$webInfo->telephone }}</li>
            </ul>
        </div>
        <!--end left-->

        <div class="topbar-right-items pull-right">
            <ul class="toplist toppadding">
                @if (Route::has('login'))
                    @auth
                        @if (auth()->user()->role == 'admin')
                            <li class="lineright"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                        @elseif (auth()->user()->role == 'customer')
                            <li class="lineright"><a href="{{ route('customer.home') }}">Dashboard</a></li>
                        @elseif (auth()->user()->role == 'employee')
                            <li class="lineright"><a href="{{ route('serviceProvider.home') }}">Dashboard</a></li>
                        @else
                            <li class="lineright"><a href="{{ url('/home') }}">Home</a></li>
                        @endif
                    @else
                        <li class="lineright"><a href="{{ route('login') }}">Login</a></li>

                        @if (Route::has('register'))
                            <li class="lineright"><a href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
                @endif
                <li><a target="_blank" href="{{ @$webInfo->facebook }}"><i class="fa fa-facebook"></i></a>
                </li>
                <li><a target="_blank" href="{{ @$webInfo->tweeter }}"><i class="fa fa-twitter"></i></a></li>
                <li><a href="{{ @$webInfo->google }}"><i class="fa fa-google-plus"></i></a></li>
                <li class="last"><a href="{{ @$webInfo->linkedin }}"><i class="fa fa-linkedin"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<!--end topbar-->

<div class="col-md-12 nopadding"
    style="background: linear-gradient(to right, rgba(255, 255, 255, 1) 50%, rgba(44, 88, 155, 0.363) 100%);">
    <div class="header-section dark-dropdowns style1 links-dark pin-style">
        <div class="container">
            <div class="mod-menu">
                <div class="row">
                    <div class="col-sm-2"> <a href="{{ url('/') }}" title="" class="logo mar-4"> <img
                                src="{{ asset($logo->logo_image ?? null) }}" width="150px" alt=""> </a> </div>
                    <div class="col-sm-10">
                        <div class="main-nav">
                            <ul class="nav navbar-nav top-nav">
                                <li class="search-parent"> <a href="javascript:void(0)" title=""><i
                                            aria-hidden="true" class="fa fa-search"></i></a>
                                    <div class="search-box">
                                        <div class="content">
                                            <div class="form-control">
                                                <form action="{{ route('front.search') }}" method="GET">
                                                    @csrf
                                                    <input type="text" name="search" placeholder="Type to search" required />
                                                    <button class="search-btn" style="background-color: #6489b100"
                                                        type="submit"><i aria-hidden="true"
                                                            class="fa fa-search"></i></button>
                                                </form>
                                            </div>
                                            <a href="#" class="close-btn">x</a>
                                        </div>
                                    </div>
                                </li>
                                @php
                                    $cartItems = cardArray();
                                    $cartCount = count($cartItems);
                                    $subTotal = \Gloudemans\Shoppingcart\Facades\Cart::subTotal();
                                @endphp

                                <li class="cart-parent">
                                    <a href="{{ route('checkout') }}">
                                        <i aria-hidden="true" class="fa fa-shopping-cart"></i><span class="number"
                                            id="cartItemCount">{{ $cartCount }}</span>
                                    </a>
                                </li>



                                <li class="cart-parent"> <a href="javascript:void(0)" title="Leave a Message"><box-icon
                                            name='message-rounded-dots' animation='tada' color='#8bbd1e'
                                            size='lg'></box-icon></a>
                                    <div class="cart-box">
                                        <div class="content">
                                            <div class="row">
                                                <div class="col-xs-8">
                                                    <h5>Send Message</h5>
                                                </div>
                                                <div class="col-xs-4 text-right">
                                                    <!-- Close button added here -->
                                                    <button type="button" class="close-btn"
                                                        onclick="closeMessageBox()">X</button>
                                                </div>
                                            </div>
                                            <style>
                                                .message-area {
                                                    background-color: #ffffff;
                                                    border: 1px solid #e0e0e0;
                                                    color: black;
                                                    border-radius: 8px;
                                                    margin-top: 10px;
                                                    padding: 15px;
                                                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                                                    height: 300px;
                                                    overflow-y: auto;
                                                }

                                                .message-area .card {
                                                    margin-bottom: 10px;
                                                }

                                                .message-area .card-body {
                                                    padding: 10px;
                                                }

                                                .close-btn {
                                                    background-color: #d81a1a;
                                                    border: none;
                                                    color: rgb(247, 242, 242);
                                                    padding: 5px 10px;
                                                    text-align: center;
                                                    text-decoration: none;
                                                    display: inline-block;
                                                    font-size: 14px;
                                                    cursor: pointer;
                                                    border-radius: 5px;
                                                }

                                                .round-button {
                                                    display: inline-block;
                                                    margin-top: -3px;
                                                    padding: 10px 20px;
                                                    border-radius: 20px;
                                                    background-color: #6489b1;
                                                    color: #fff;
                                                    text-align: center;
                                                    text-decoration: none;
                                                    cursor: pointer;
                                                    border: none;
                                                }

                                                .round-button:hover {
                                                    background-color: #10dd5f;
                                                    /* Change the background color on hover */
                                                }
                                            </style>


                                            <div class="message-area" id="messageArea">
                                                @foreach ($chats as $chat)
                                                    @foreach ($chat->chatDetails as $chatDetail)
                                                        <div class="card bg-light">
                                                            <div class="card-body">
                                                                @if ($chatDetail->message)
                                                                    <div
                                                                        style="text-align: start; background-color: #e0e0e0; padding: 5px; margin-bottom: 5px;">
                                                                        <b>You</b><br>{{ $chatDetail->message }}
                                                                    </div>
                                                                @endif

                                                                @if ($chatDetail->reply)
                                                                    <div
                                                                        style="text-align: end; background-color: #c0c0c0; padding: 5px; margin-bottom: 5px;">
                                                                        <b>Admin</b><br>{{ $chatDetail->reply }}
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endforeach


                                            </div>
                                            <form method="post" action="{{ route('chat.store') }}"
                                                style="margin-top:30px">
                                                @csrf
                                                <input type="text" name='message' class="form-control"
                                                    style="width: 70%; display: inline-block;"
                                                    placeholder="Write a message">
                                                <button type="submit" title="Send Message" class="round-button"
                                                    style="display: inline-block; margin-top: -3px;">Send</button>

                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <script>
                                    // JavaScript function to scroll to the bottom of the message area
                                    function scrollToBottom() {
                                        var messageArea = document.getElementById("messageArea");
                                        messageArea.scrollTop = messageArea.scrollHeight;
                                    }

                                    // Call the function when the page loads or when the message box is opened
                                    window.onload = scrollToBottom;
                                </script>

                                <li class="visible-xs menu-icon"> <a href="javascript:void(0)"
                                        class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu"
                                        aria-expanded="false"> <i aria-hidden="true" class="fa fa-bars"></i> </a>
                                </li>
                            </ul>
                            <div id="menu" class="collapse">
                                <ul class="nav navbar-nav">
                                    <li class="{{ url()->current() == route('front.home') ? 'active' : '' }}"> <a
                                            href="{{ route('front.home') }}">Home</a></li>
                                    <li class="{{ url()->current() == route('front.about') ? 'active' : '' }}"> <a
                                            href="{{ route('front.about') }}">About Us</a></li>
                                    <li class="{{ url()->current() == route('front.services') ? 'active' : '' }}"> <a
                                            href="{{ route('front.services') }}">Services</a></li>
                                    <li class="{{ url()->current() == route('front.products') ? 'active' : '' }}"> <a
                                            href="{{ route('front.products') }}">Products</a></li>
                                    <li class="{{ url()->current() == route('front.career') ? 'active' : '' }}"> <a
                                            href="{{ route('front.career') }}">Career</a></li>
                                    {{-- <li class="{{ url()->current() == route('front.blog') ? 'active' : '' }}"> <a
                                            href="{{ route('front.blog') }}">Blog</a></li> --}}
                                    <li class="{{ url()->current() == route('front.contact') ? 'active' : '' }}"> <a
                                            href="{{ route('front.contact') }}">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end menu-->

</div>
<!--end menu-->

<div class="clearfix"></div>
