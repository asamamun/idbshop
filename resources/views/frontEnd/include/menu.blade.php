<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<?php 
                        $baseName = basename(\Request::url());
                        //echo $baseName;
                    ?>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item <?php if($baseName=='public') { echo 'selected'; } ?>"><a class="menu__link" href="{{ url('/') }}">Home</a></li>
                            
                            <li class=" menu__item <?php if($baseName=='shops') { echo 'selected'; } ?>"><a class="menu__link" href="{{ url('/shops') }}">Shop</a>
                            <li class=" menu__item <?php if($baseName=='allProducts') { echo 'selected'; } ?>"><a class="menu__link" href="{{ url('/allProducts') }}">Products</a>
                            
							<li class="dropdown menu__item">
								<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories <span class="caret"></span></a>
								<ul class="dropdown-menu multi-column columns-3">
									<div class="row">
										<div class="col-sm-6 multi-gd-img1 multi-gd-text ">
											<a href="mens.html"><img src="{{asset('vendor/singleProduct/images/woo1.jpg')}}" alt=" "/></a>
										</div>
										<div class="col-sm-3 multi-gd-img">
											<ul class="multi-column-dropdown">
												<li><strong>Parent Categories</strong></li>
                                                @foreach($categoryname as $catname)
                                                    <?php if($catname->parent_id != 1) { ?>
                                                    <li><a href="#">{{$catname->catname}}</a></li>
                                                    <?php } ?>
                                                @endforeach
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</ul>
							</li>
							<li class=" menu__item"><a class="menu__link" href="contact.html">contact</a></li>
							
							
							
							@if (Route::has('login'))
							@auth
                            @if(Auth::user()->user_group==1)
							<li class="dropdown menu__item">
								<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Manage Shop<!--Hello {{Auth::user()->name}}--> <span class="caret"></span></a>
								<ul class="dropdown-menu">
									 <li><a href="{{ url('shop/Shop') }}" target="_blank">Shop Settings</a></li>
                                     <li><a href="{{ url('shop/dashboard') }}" target="_blank">Dashboard</a></li>
                                     <li><a href="{{ url('shop/product-type') }}" target="_blank">Add Product</a></li>
                                     <li><a href="{{ url('shop/product') }}" target="_blank">All Products</a></li>
                                     
                                     <li>
                                      <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out"></i> Logout
                                      </a>
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                                    </li>
									<div class="clearfix"></div>
								</ul>
							</li>
                            @elseif(Auth::user()->user_group==0)
                            <li class="dropdown menu__item">
								<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Manage Account<!--Hello {{Auth::user()->name}}--> <span class="caret"></span></a>
								<ul class="dropdown-menu">
                                    <li>
                                      <a href="{{url('/userAddress')}}">
                                        <i class=""></i> Address
                                      </a>
                                    </li>
                                     <li>
                                      <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out"></i> Logout
                                      </a>
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                                    </li>
									<div class="clearfix"></div>
								</ul>
							</li>
                            @else
                            <li class="dropdown menu__item">
								<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin Panel<!--Hello {{Auth::user()->name}}--> <span class="caret"></span></a>
								<ul class="dropdown-menu">
                                     <li><a href="{{url('admin/dashboard')}}" target="_blank">Dashboard</a></li>
                                     <li><a href="{{url('admin/user')}}" target="_blank">Manage Users</a></li>
                                     <li><a href="{{url('admin/Category')}}" target="_blank">Manage Categories</a></li>
                                     <li><a href="{{url('admin/attribute')}}" target="_blank">Manage Attribute</a></li>
                                     <li><a href="{{url('admin/attributeset')}}" target="_blank">Manage Attribute Set</a></li>
                                     
                                     <li>
                                      <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out"></i> Logout
                                      </a>
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                                    </li>
									<div class="clearfix"></div>
								</ul>
							</li>
                            @endif
                            @else
                            <li class="dropdown menu__item">
								<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="{{ route('login') }}" target="_blank"><i class="fa fa-lock"></i> Login</a></li>
                                    <li><a href="{{ route('register') }}" target="_blank"><i class="fa fa-registered"></i> Register</a></li>
									
									<div class="clearfix"></div>
								</ul>
							</li>
                            @endauth
                            @endif 
							
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="top_nav_right" id="cartContainer" style="background-color:#fda30e;height:73px;">
			<div class="cart box" style="padding:25px;"><a href="{{url('/cartDetails')}}"><h4> <div class="total"><i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i><span class="simpleCart_total">{{Cart::subtotal()}}</span>(<span id="simpleCart_quantity" class="simpleCart_quantity">{{Cart::count()}}</span> items)</div></h4></a></div>
		<!--div class="cart box">
				<a href="{{url('/checkout')}}"><h3> <div class="total"><i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i><span class="simpleCart_total"></span>(<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div></h3></a>
				<p><a href="" class="cartempty" id="emptycartbtn">Empty Cart</a></p>
			</div-->
		</div>
		<div class="clearfix"></div>
	</div>
</div>


<style>
li.selected.menu__item a.menu__link {
    background: #fda30e;
}
</style>