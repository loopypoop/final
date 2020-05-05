@extends('layouts.app')
@section('title') About @endsection
@section('content')
<body class="animsition">
	
	<!-- Header -->
	<header class="header-v4">
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			
<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						Free shipping for standard order over $100
					</div>

					@guest
					<div class="right-top-bar flex-w h-full">
						<a href="{{ route('login')}}" class="flex-c-m trans-04 p-lr-25">
							Log in
						</a>
						@if (Route::has('register'))
						<a href="{{ route('signup')}}" class="flex-c-m trans-04 p-lr-25">
							Sign up
						</a>
						@endif
					</div>
					@else
					<div class="right-top-bar flex-w h-full">
						@if(Auth::user()->is_admin == 1)
						<a href="{{ route('admin') }}" class="flex-c-m trans-04 p-lr-25">Admin Panel</a>
						@endif
						<a href="{{ route('profile')}}" class="flex-c-m trans-04 p-lr-25">
							{{ Auth::user()->name }}
						</a>

						<a href="{{ route('logout') }}" class="flex-c-m trans-04 p-lr-25" onclick="event.preventDefault();
						document.getElementById('logout-form').submit();">
							Log out
						</a>

						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
						</form>
					</div>
					@endguest
				</div>
			</div>
			

			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="#" class="logo">
						<!--<img src="images/icons/logo-01.png" alt="IMG-LOGO">-->
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li >
								<a href="{{ route('home')}}">Home</a>
							</li>

							<li>
								<a href="{{route('shop')}}">Shop</a>
							</li>

							<li  
							<?php if(Cart::getTotalQuantity() > 0) {
							echo 'class="label1" 
								data-label1="'.Cart::getTotalQuantity().'"';
							}
							?>
							>
								<a href="{{route('cart')}}">Cart</a>
							</li>

							<li>
								<a href="{{route('cart')}}">Features</a>
							</li>

							<li>
								<a href="{{route('about')}}">About</a>
							</li>

							<li>
								<a href="{{ route('contact')}}">Contact</a>
							</li>
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div>

						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="{{ \Cart::getTotalQuantity()}}">
							<i class="zmdi zmdi-shopping-cart"></i>
						</div>

						<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
							<i class="zmdi zmdi-favorite-outline"></i>
						</a>
					</div>
				</nav>
			</div>	
		</div>

		<!-- Header Mobile
		<div class="wrap-header-mobile">
			Logo moblie 		
			<div class="logo-mobile">
				<a href="index.html"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
			</div>

			Icon header 
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div>

				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
					<i class="zmdi zmdi-shopping-cart"></i>
				</div>

				<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
					<i class="zmdi zmdi-favorite-outline"></i>
				</a>
			</div>

			Button show menu 
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		Menu Mobile 
		<div class="menu-mobile">
			<ul class="topbar-mobile">
				<li>
					<div class="left-top-bar">
						Free shipping for standard order over $100
					</div>
				</li>

				<li>
					<div class="right-top-bar flex-w h-full">
						<a href="{{ route('login')}}" class="flex-c-m trans-04 p-lr-25">
							Log in
						</a>

						<a href="#" class="flex-c-m trans-04 p-lr-25">
							Sign up
						</a>
					</div>
				</li>
			</ul>

			<ul class="main-menu-m">
				<li>
					<a href="{{ route('home')}}">Home</a>
					<ul class="sub-menu-m">
						<li><a href="{{ route('home')}}">Homepage 1</a></li>
						<li><a href="home-02.html">Homepage 2</a></li>
						<li><a href="home-03.html">Homepage 3</a></li>
					</ul>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li>
					<a href="{{ route('shop')}}">Shop</a>
				</li>

				<li>
					<a href="shoping-cart.html" class="label1 rs1" data-label1="hot">Features</a>
				</li>

				<li>
					<a href="blog.html">Blog</a>
				</li>

				<li>
					<a href="about.html">About</a>
				</li>

				<li>
					<a href="{{ route('contact')}}">Contact</a>
				</li>
			</ul>
		</div> -->

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>

	<!-- Cart -->
	<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Cart
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>
			
			<div class="header-cart-content flex-w js-pscroll">
				<ul class="header-cart-wrapitem w-full">
					
				@foreach(\Cart::getContent() as $item)
					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="images/item-{{ $item->id }}.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								{{ $item->name }}
							</a>

							<span class="header-cart-item-info">
								{{ $item->quantity }} x {{ $item->price }}
							</span>а
						</div>
					</li>
					@endforeach

				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
						Total: ${{ \Cart::getTotal() }}
					</div>

					<div class="header-cart-buttons flex-w w-full">
						<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							View Cart
						</a>

						<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Check Out
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-01.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			About
		</h2>
	</section>	


	<!-- Content page -->
	<section class="bg0 p-t-75 p-b-120">
		<div class="container">
			<div class="row p-b-148">
				<div class="col-md-7 col-lg-8">
					<div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
						<h3 class="mtext-111 cl2 p-b-16">
							Our Story
						</h3>

						<p class="stext-113 cl6 p-b-26">
							Three ordinary students with the same dream of getting A in Web Development discipline. Our teacher told us to do project using Laravel framework and in every milestone we had to show our proccess of making functioning website. We were amateurs in PHP language and in order to make our project as good as possible we were using some any information in the internet to make our site convenient and with appropriate design.
						</p>

						<p class="stext-113 cl6 p-b-26">
							In final exams we successfully presented our project and got appropriate marks. Moreover, we continued to improve our website in the summer. And now, in 2021 our project has become a breakthrough in the modern world. We became a huge company and gained over 300 employees. Now our stocks are more expensive than Apple's or Google's. Who would know that just a simple project bring us to success. Over 10000000 people use our website all over the world. 
						</p>

						<p class="stext-113 cl6 p-b-26">
							Any questions? Let us know in IITU, 34/1 Manasa St, Almaty or call us on (+1) 96 716 6879
						</p>
					</div>
				</div>

				<div class="col-11 col-md-5 col-lg-4 m-lr-auto">
					<div class="how-bor1 ">
						<div class="hov-img0">
							<img src="images/about-01.jpg" alt="IMG">
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="order-md-2 col-md-7 col-lg-8 p-b-30">
					<div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
						<h3 class="mtext-111 cl2 p-b-16">
							Our Mission
						</h3>

						<p class="stext-113 cl6 p-b-26">
							We try to take care of each customer in our site, and always improve our system by making it as convenient as possible. We are trying to apply a lot of useful functionalities for more opportunities for clients without any incomprehensibility.
						</p>

						<div class="bor16 p-l-29 p-b-9 m-t-22">
							<p class="stext-114 cl6 p-r-40 p-b-11">
								Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn't really do it, they just saw something. It seemed obvious to them after a while.
							</p>

							<span class="stext-111 cl8">
								- Steve Job’s 
							</span>
						</div>
					</div>
				</div>

				<div class="order-md-1 col-11 col-md-5 col-lg-4 m-lr-auto p-b-30">
					<div class="how-bor2">
						<div class="hov-img0">
							<img src="images/about-02.jpg" alt="IMG">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	
@endsection