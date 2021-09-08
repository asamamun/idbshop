<!--Extend welcome.blade-->
@extends('frontEnd.welcome')
<!--Start Dynamic Title From welcome.blade-->
@section('title')
    IDB Shop
@endsection

<!--Start Dynamic Section From welcome.blade-->
@section('mainContent')
<!-- banner -->
<div class="banner-grid">
	<div id="visual">
			<div class="slide-visual">
				<!-- Slide Image Area (1000 x 424) -->
				<ul class="slide-group">
					<li><img class="img-responsive" src="{{asset('vendor/singleProduct/images/ba1.jpg')}}" alt="Dummy Image" /></li>
					<li><img class="img-responsive" src="{{asset('vendor/singleProduct/images/ba2.jpg')}}" alt="Dummy Image" /></li>
					<li><img class="img-responsive" src="{{asset('vendor/singleProduct/images/ba3.jpg')}}" alt="Dummy Image" /></li>
				</ul>

				<!-- Slide Description Image Area (316 x 328) -->
				<div class="script-wrap">
					<ul class="script-group">
						<li><div class="inner-script"><img class="img-responsive" src="{{asset('vendor/singleProduct/images/baa1.jpg')}}" alt="Dummy Image" /></div></li>
						<li><div class="inner-script"><img class="img-responsive" src="{{asset('vendor/singleProduct/images/baa2.jpg')}}" alt="Dummy Image" /></div></li>
						<li><div class="inner-script"><img class="img-responsive" src="{{asset('vendor/singleProduct/images/baa3.jpg')}}" alt="Dummy Image" /></div></li>
					</ul>
					<div class="slide-controller">
						<a href="#" class="btn-prev"><img src="{{asset('vendor/singleProduct/images/btn_prev.png')}}" alt="Prev Slide" /></a>
						<a href="#" class="btn-play"><img src="{{asset('vendor/singleProduct/images/btn_play.png')}}" alt="Start Slide" /></a>
						<a href="#" class="btn-pause"><img src="{{asset('vendor/singleProduct/images/btn_pause.png')}}" alt="Pause Slide" /></a>
						<a href="#" class="btn-next"><img src="{{asset('vendor/singleProduct/images/btn_next.png')}}" alt="Next Slide" /></a>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	<script type="text/javascript" src="{{asset('vendor/singleProduct/js/pignose.layerslider.js')}}"></script>
	<script type="text/javascript">
	//<![CDATA[
		$(window).load(function() {
			$('#visual').pignoseLayerSlider({
				play    : '.btn-play',
				pause   : '.btn-pause',
				next    : '.btn-next',
				prev    : '.btn-prev'
			});
		});
	//]]>
	</script>

</div>
<!-- //banner -->
<!-- content -->

<div class="new_arrivals">
	<div class="container">
		<h3><span>new </span>arrivals</h3>
		<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
		<div class="new_grids">
			<div class="col-md-4 new-gd-left">
				<img src="{{asset('vendor/singleProduct/images/wed1.jpg')}}" alt=" " />
				<div class="wed-brand simpleCart_shelfItem">
					<h4>Wedding Collections</h4>
					<h5>Flat 50% Discount</h5>
					<p><i>$250</i> <span class="item_price">$500</span><a class="item_add hvr-outline-out button2" href="#">add to cart </a></p>
				</div>
			</div>
			<div class="col-md-4 new-gd-middle">
				<div class="new-levis">
					<div class="mid-img">
						<img src="{{asset('vendor/singleProduct/images/levis1.png')}}" alt=" " />
					</div>
					<div class="mid-text">
						<h4>up to 40% <span>off</span></h4>
						<a class="hvr-outline-out button2" href="product.html">Shop now </a>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="new-levis">
					<div class="mid-text">
						<h4>up to 50% <span>off</span></h4>
						<a class="hvr-outline-out button2" href="product.html">Shop now </a>
					</div>
					<div class="mid-img">
						<img src="{{asset('vendor/singleProduct/images/dig.jpg')}}" alt=" " />
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-4 new-gd-left">
				<img src="{{asset('vendor/singleProduct/images/wed2.jpg')}}" alt=" " />
				<div class="wed-brandtwo simpleCart_shelfItem">
					<h4>Spring / Summer</h4>
					<p>Shop Men</p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //content -->

<!-- content-bottom -->

<div class="content-bottom">
	<div class="col-md-7 content-lgrid">
		<div class="col-sm-6 content-img-left text-center">
			<div class="content-grid-effect slow-zoom vertical">
				<div class="img-box"><img src="{{asset('vendor/singleProduct/images/p1.jpg')}}" alt="image" class="img-responsive zoom-img"></div>
					<div class="info-box">
						<div class="info-content simpleCart_shelfItem">
									<h4>Mobiles</h4>
									<span class="separator"></span>
									<p><span class="item_price">$500</span></p>
									<span class="separator"></span>
									<a class="item_add hvr-outline-out button2" href="#">add to cart </a>
						</div>
					</div>
			</div>
		</div>
		<div class="col-sm-6 content-img-right">
			<h3>Special Offers and 50%<span>Discount On</span> Mobiles</h3>
		</div>
		
		<div class="col-sm-6 content-img-right">
			<h3>Buy 1 get 1  free on <span> Branded</span> Watches</h3>
		</div>
		<div class="col-sm-6 content-img-left text-center">
			<div class="content-grid-effect slow-zoom vertical">
				<div class="img-box"><img src="{{asset('vendor/singleProduct/images/p2.jpg')}}" alt="image" class="img-responsive zoom-img"></div>
					<div class="info-box">
						<div class="info-content simpleCart_shelfItem">
							<h4>Watches</h4>
							<span class="separator"></span>
							<p><span class="item_price">$250</span></p>
							<span class="separator"></span>
							<a class="item_add hvr-outline-out button2" href="#">add to cart </a>
						</div>
					</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="col-md-5 content-rgrid text-center">
		<div class="content-grid-effect slow-zoom vertical">
				<div class="img-box"><img src="{{asset('vendor/singleProduct/images/p4.jpg')}}" alt="image" class="img-responsive zoom-img"></div>
					<div class="info-box">
						<div class="info-content simpleCart_shelfItem">
									<h4>Shoes</h4>
									<span class="separator"></span>
									<p><span class="item_price">$150</span></p>
									<span class="separator"></span>
									<a class="item_add hvr-outline-out button2" href="#">add to cart </a>
						</div>
					</div>
			</div>
	</div>
	<div class="clearfix"></div>
</div>
<!-- //content-bottom -->
<!-- product-nav -->

<div class="product-easy">
	<div class="container">
		
		<script src="{{asset('vendor/singleProduct/js/easyResponsiveTabs.js')}}" type="text/javascript"></script>
		<script type="text/javascript">
							$(document).ready(function () {
								$('#horizontalTab').easyResponsiveTabs({
									type: 'default', //Types: default, vertical, accordion           
									width: 'auto', //auto or any width like 600px
									fit: true   // 100% fit in a container
								});
							});
							
		</script>
		<div class="sap_tabs">
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Latest Designs</span></li> 
					<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Special Offers</span></li> 
					<li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Collections</span></li> 
				</ul>				  	 
				<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                      @foreach($products as $product)             
                        <?php
                            $pid =$product->id;
                            $name = '';
                            $price = '';
                            $image = ''; 
                            $uname = '';
                        ?>
                        
                        @foreach($product->productmetas as $productmeta)
                            @if($productmeta->namemeta=='name')
                                <?php $name .= $productmeta->value; ?>
                            @endif
                            @if($productmeta->namemeta=='price')
                                <?php $price .= $productmeta->value; ?>
                            @endif
                        @endforeach
                        @foreach($product->productimages as $producimage)
                            <?php 
                                $image .= $producimage->imagename;
                                if($image > 1) {
                                    break;
                                } 
                            ?>
                                
                        @endforeach                        
                        
                        <?php
                        //productImage
                        $publicImageLink = public_path().'/images/product/'.$image;
                        $imageLink = asset('images/product/').'/'.$image;
                        $noimageLink = asset('images/no_image.jpg'); 
                        ?>                              
                        <div id="latest_products" class="col-md-3 product-men" style="margin-bottom:40px;">
							<div class="men-pro-item simpleCart_shelfItem">
							<input type="hidden" id="pid" value="{{$pid}}">
								<div class="men-thumb-item">
									<img src="<?php echo file_exists($publicImageLink)? $imageLink : $noimageLink; ?>" alt="" class="pro-image-front">
									<img src="<?php echo file_exists($publicImageLink)? $imageLink : $noimageLink; ?>" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{url('/singleProduct/'.$product->id)}}" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="{{url('/singleProduct/'.$product->id)}}"><?php echo $name; ?></a></h4>
									<div class="info-product-price">
										<span class="item_price"><?php echo $price; ?></span>
										<del>$69.71</del>
									</div>
                                    <button type="button"  data-id="{{$pid}}" class="item_add hvr-outline-out button2 addToCart" style="color: #fff; padding:9px; font-size:16px;">ADD TO CART</button>
                                    
                                    <h5 style="margin-top: 10px; font-size: 12px; text-transform: capitalize;">Shop: <a href="{{url('/singleShop/'.$product->user->id)}}">
                                    @if($product->user->shop->name == '')    
                                        {{$product->user->name}}
                                    @else
                                        {{$product->user->shop->name}}
                                    @endif    
                                    </a></h5>
								</div>
							</div>
						</div>
		                @endforeach
						
						<style>
                            .men-pro-item .men-thumb-item img {
                                height: 215px;
                            }
                        </style>
						<div class="clearfix"></div>					
					</div>
					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="{{asset('vendor/singleProduct/images/g1.png')}}" alt="" class="pro-image-front">
									<img src="{{asset('vendor/singleProduct/images/g1.png')}}" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">Dresses</a></h4>
									<div class="info-product-price">
										<span class="item_price">$45.99</span>
										<del>$69.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="{{asset('vendor/singleProduct/images/g2.png')}}" alt="" class="pro-image-front">
									<img src="{{asset('vendor/singleProduct/images/g2.png')}}" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html"> Shirts</a></h4>
									<div class="info-product-price">
										<span class="item_price">$45.99</span>
										<del>$69.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="{{asset('vendor/singleProduct/images/g3.png')}}" alt="" class="pro-image-front">
									<img src="{{asset('vendor/singleProduct/images/g3.png')}}" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">Shirts</a></h4>
									<div class="info-product-price">
										<span class="item_price">$45.99</span>
										<del>$69.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="{{asset('vendor/singleProduct/images/mw2.png')}}" alt="" class="pro-image-front">
									<img src="{{asset('vendor/singleProduct/images/mw2.png')}}" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">T shirts</a></h4>
									<div class="info-product-price">
										<span class="item_price">$45.99</span>
										<del>$69.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="{{asset('vendor/singleProduct/images/w4.png')}}" alt="" class="pro-image-front">
									<img src="{{asset('vendor/singleProduct/images/w4.png')}}" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">Air Tshirt Black Domyos</a></h4>
									<div class="info-product-price">
										<span class="item_price">$45.99</span>
										<del>$69.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="{{asset('vendor/singleProduct/images/w3.png')}}" alt="" class="pro-image-front">
									<img src="{{asset('vendor/singleProduct/images/w3.png')}}" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">Hand Bags</a></h4>
									<div class="info-product-price">
										<span class="item_price">$45.99</span>
										<del>$69.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						<div class="clearfix"></div>		
					</div>	
				</div>	
			</div>
		</div>
	</div>
</div>
<script>
    $(document).ready(function(){
        $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
        var url = "{{URL::to('/')}}";

        //add start
        
        $(".product-easy").on("click",".addToCart",function(){
            //alert($(this).attr("data-id"));
            $.ajax({
                type: "POST",
                url: url + '/user/addcart',
                data:{
                    pid:$(this).attr("data-id"),                    
                    quantity:1,                 
                },
                success: function (data) {
                    //console.log(data.message);
                    //alert(data);
                    if(data.message =='Added'){
                        updatecart();
                        //location.reload();
                    }
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });

        });


        function updatecart(){
            //alert("called");
            $.ajax({
                type: "POST",
                url: url + '/user/updatecart',
                success: function (data) {
                    $("#cartContainer").html(data);

                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        }
        //add end

    });
</script>

@endsection