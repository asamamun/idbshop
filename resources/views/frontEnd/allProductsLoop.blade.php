<!--Extend welcome.blade-->
@extends('frontEnd.welcome')
<!--Start Dynamic Title From welcome.blade-->

<?php

?>

@section('title')
    All Products | IDB Shop
@endsection

<!--Start Dynamic Section From welcome.blade-->
@section('mainContent')
<!-- banner -->
    <div class="page-head">
        <div class="container">
            <h3>
            All Products
           </h3>
        </div>
    </div>
    <!-- //banner -->
    
<!-- mens -->
<div class="men-wear product-easy">
	<div class="container">
		<div class="col-md-4 products-left">
			<div class="filter-price">
				<h3>Filter By Price</h3>
					<ul class="dropdown-menu6">
						<li>                
							<div id="slider-range"></div>							
							<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
						</li>			
					</ul>
							<!---->
							<script type='text/javascript'>//<![CDATA[ 
							$(window).load(function(){
							 $( "#slider-range" ).slider({
										range: true,
										min: 0,
										max: 9000,
										values: [ 1000, 7000 ],
										slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
										}
							 });
							$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

							});//]]>  

							</script>
						<script type="text/javascript" src="{{asset('vendor/singleProduct/js/jquery-ui.js')}}"></script>
					 <!---->
			</div>
			<div class="css-treeview">
				<h4>Categories</h4>
				<ul class="tree-list-pad">
					<li><input type="checkbox" checked="checked" id="item-0" /><label for="item-0"><span></span>Men's Wear</label>
						<ul>
							<li><input type="checkbox" id="item-0-0" /><label for="item-0-0">Ethinic Wear</label>
								<ul>
									<li><a href="mens.html">Shirts</a></li>
									<li><a href="mens.html">Caps</a></li>
									<li><a href="mens.html">Shoes</a></li>
									<li><a href="mens.html">Pants</a></li>
									<li><a href="mens.html">SunGlasses</a></li>
									<li><a href="mens.html">Trousers</a></li>
								</ul>
							</li>
							<li><input type="checkbox"  id="item-0-1" /><label for="item-0-1">Party Wear</label>
								<ul>
									<li><a href="mens.html">Shirts</a></li>
									<li><a href="mens.html">Caps</a></li>
									<li><a href="mens.html">Shoes</a></li>
									<li><a href="mens.html">Pants</a></li>
									<li><a href="mens.html">SunGlasses</a></li>
									<li><a href="mens.html">Trousers</a></li>
								</ul>
							</li>
							<li><input type="checkbox"  id="item-0-2" /><label for="item-0-2">Casual Wear</label>
								<ul>
									<li><a href="mens.html">Shirts</a></li>
									<li><a href="mens.html">Caps</a></li>
									<li><a href="mens.html">Shoes</a></li>
									<li><a href="mens.html">Pants</a></li>
									<li><a href="mens.html">SunGlasses</a></li>
									<li><a href="mens.html">Trousers</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><input type="checkbox" id="item-1" checked="checked" /><label for="item-1">Best Collections</label>
						<ul>
							<li><input type="checkbox" checked="checked" id="item-1-0" /><label for="item-1-0">New Arrivals</label>
								<ul>
									<li><a href="mens.html">Shirts</a></li>
									<li><a href="mens.html">Shoes</a></li>
									<li><a href="mens.html">Pants</a></li>
									<li><a href="mens.html">SunGlasses</a></li>
								</ul>
							</li>
							
						</ul>
					</li>
					<li><input type="checkbox" checked="checked" id="item-2" /><label for="item-2">Best Offers</label>
						<ul>
							<li><input type="checkbox"  id="item-2-0" /><label for="item-2-0">Summer Discount Sales</label>
								<ul>
									<li><a href="mens.html">Shirts</a></li>
									<li><a href="mens.html">Shoes</a></li>
									<li><a href="mens.html">Pants</a></li>
									<li><a href="mens.html">SunGlasses</a></li>
								</ul>
							</li>
							<li><input type="checkbox" id="item-2-1" /><label for="item-2-1">Exciting Offers</label>
								<ul>
									<li><a href="mens.html">Shirts</a></li>
									<li><a href="mens.html">Shoes</a></li>
									<li><a href="mens.html">Pants</a></li>
									<li><a href="mens.html">SunGlasses</a></li>
								</ul>
							</li>
							<li><input type="checkbox" id="item-2-2" /><label for="item-2-2">Flat Discounts</label>
								<ul>
									<li><a href="mens.html">Shirts</a></li>
									<li><a href="mens.html">Shoes</a></li>
									<li><a href="mens.html">Pants</a></li>
									<li><a href="mens.html">SunGlasses</a></li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="community-poll">
				<h4>Community Poll</h4>
				<div class="swit form">	
					<form>
					<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio" checked=""><i></i>More convenient for shipping and delivery</label> </div></div>
					<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Lower Price</label> </div></div>
					<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Track your item</label> </div></div>
					<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Bigger Choice</label> </div></div>
					<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>More colors to choose</label> </div></div>	
					<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Secured Payment</label> </div></div>
					<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Money back guaranteed</label> </div></div>	
					<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Others</label> </div></div>		
					<input type="submit" value="SEND">
					</form>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="col-md-8 products-right">
			<h5>Product Compare(0)</h5>
			<div class="sort-grid">
				<div class="sorting">
					<h6>Sort By</h6>
					<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
						<option value="null">Default</option>
						<option value="null">Name(A - Z)</option> 
						<option value="null">Name(Z - A)</option>
						<option value="null">Price(High - Low)</option>
						<option value="null">Price(Low - High)</option>	
						<option value="null">Model(A - Z)</option>
						<option value="null">Model(Z - A)</option>					
					</select>
					<div class="clearfix"></div>
				</div>
				<div class="sorting">
					<h6>Showing</h6>
					<select id="country2" onchange="change_country(this.value)" class="frm-field required sect">
						<option value="null">7</option>
						<option value="null">14</option> 
						<option value="null">28</option>					
						<option value="null">35</option>								
					</select>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
                        <style>
                            .men-pro-item .men-thumb-item img {
                                height: 215px;
                            }
                        </style>
                @foreach($allProductFront as $allP)             
                        <?php
                            $pid = $allP->id;
                            $name = '';
                            $price = '';
                            $image = ''; 
                            $uname = '';
                        ?>
                        
                        @foreach($allP->productmetas as $productmeta)
                            @if($productmeta->namemeta=='name')
                                <?php $name .= $productmeta->value; ?>
                            @endif
                            @if($productmeta->namemeta=='price')
                                <?php $price .= $productmeta->value; ?>
                            @endif
                        @endforeach
                        @foreach($allP->productimages as $producimage)
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

				<div class="col-md-4 product-men no-pad-men" style="margin-bottom:50px;">
					<div class="men-pro-item simpleCart_shelfItem">
							<input type="hidden" id="pid" value="{{$pid}}">
								<div class="men-thumb-item">
									<img src="<?php echo file_exists($publicImageLink)? $imageLink : $noimageLink; ?>" alt="" class="pro-image-front">
									<img src="<?php echo file_exists($publicImageLink)? $imageLink : $noimageLink; ?>" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{url('/singleProduct/'.$pid)}}" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="{{url('/singleProduct/'.$pid)}}"><?php echo $name; ?></a></h4>
									<div class="info-product-price">
										<span class="item_price"><?php echo $price; ?></span>
										<del>$69.71</del>
									</div>
                                    <button type="button"  data-id="{{$pid}}" class="item_add hvr-outline-out button2 addToCart" style="color: #fff; padding:9px; font-size:16px;">ADD TO CART</button>
                                    
                                    <h5 style="margin-top: 10px; font-size: 12px; text-transform: capitalize;">Shop: <a href="{{url('/singleShop/'.$allP->user->id)}}">
                                    @if($allP->user->shop->name == '')    
                                        {{$allP->user->name}}
                                    @else
                                        {{$allP->user->shop->name}}
                                    @endif    
                                    </a></h5>
								</div>
					</div>
				</div>
                 @endforeach

            
				<div class="clearfix"></div>
		<div class="pagination-grid text-right">
            {{$allProductFront->links()}}
		</div>
            
				<div class="clearfix"></div>
		</div>
		
	</div>
</div>	
<!-- //mens -->

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


