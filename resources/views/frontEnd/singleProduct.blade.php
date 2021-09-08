<!--Extend welcome.blade-->
@extends('frontEnd.welcome')
<!--Start Dynamic Title From welcome.blade-->
@section('title')
       Product Name - <?php
        foreach ($product as $p){
           foreach($p->productmetas as $ps){
            if($ps->namemeta == 'name')
            { echo $ps->value; }
        } } ?>
@endsection

<!--Start Dynamic Section From welcome.blade-->
@section('mainContent')
<!-- banner -->
<div class="page-head">
	<div class="container">
		<h3>
		Product - <?php foreach ($product as $p){ foreach($p->productmetas as $ps){ if($ps->namemeta == 'name'){ 
		echo $ps->value; } } } ?>
		</h3>
	</div>
</div>
<!-- //banner -->
<!-- single -->
<div class="single">
	<div class="container">
		<div class="col-md-6 single-right-left animated wow slideInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;">
			<div class="grid images_3_of_2">
				<div class="flexslider">
					<!-- FlexSlider -->
					<script>
                        // Can also be used with $(document).ready()
                        $(window).load(function() {
                            $('.flexslider').flexslider({
                                animation: "slide",
                                controlNav: "thumbnails"
                            });
                        });
					</script>
					<!-- //FlexSlider-->
					<style>
						.flex-control-thumbs {
							height: 300px;
							overflow: auto;
						}
						.flex-control-thumbs img {
							height: 65px;
						}
					</style>
					<ul class="slides">
                        <?php
                        $singleimage = "";
                        foreach ($product as $p){
                        foreach($p->productimages as $pimage){
                        ?>

						<li data-thumb="{{asset('images/product/')}}/<?php echo $pimage->imagename; ?>">
							<div class="thumb-image"> <img src="{{asset('images/product/')}}/<?php echo $pimage->imagename; ?>" data-imagezoom="true" class="img-responsive" style="width:100%;"> </div>
						</li>
                      <?php

                         } }
                        ?>
					</ul>
					
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		

		<div class="col-md-6 single-right-left simpleCart_shelfItem animated wow slideInRight animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInRight;">
			<h3><?php foreach ($product as $p){ foreach($p->productmetas as $ps){ if($ps->namemeta == 'name') { echo $ps->value; } } } ?></h3>
			<p><span class="item_price" title="BDT">‎<small>৳</small><span><?php foreach ($product as $p){ foreach($p->productmetas as $ps){ if($ps->namemeta == 'price') { echo $ps->value; } } } ?></span></span> <del>- ‎<small>৳</small>900</del></p>
			<div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked="">
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
			</div>
			<!--<div class="description">
                <h5>Check delivery, payment options and charges at your location</h5>
                <input type="text" value="Enter pincode" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter pincode';}" required="">
                <input type="submit" value="Check">
            </div>-->
			<style>
				.color-quality table td {
					padding-top: 7px;
					padding-bottom: 7px;
				}
			</style>
			<div class="color-quality">
				<div class="color-quality-right">
					<table border="0" style="margin-bottom: 20px; margin-top: 20px;">

						<input type="hidden" id="pid" value="<?php foreach ($product as $p) {echo $p->id;}?>">

						<tr>
							<td>Stock:</td>
							<td style="padding-left:20px;"><span class="label label-info"><?php foreach ($product as $p){ foreach($p->productmetas as $ps){ if($ps->namemeta == 'stock') { echo $ps->value; } } } ?></span></td>
						</tr>



						<tr>
							<td>Quantity:</td>
							<td style="padding-left:20px;"><input type="number" id="quantity" class="qty form-control" value="1" /></td>
							<td style="padding-left:10px;">piece(s)</td>
						</tr>

						<tr>
							<td>SKU:</td>
							<td style="padding-left:20px;"><?php foreach ($product as $p){ foreach($p->productmetas as $ps){ if($ps->namemeta == 'sku') { echo $ps->value; } } } ?></td>
						</tr>

						<tr>
							<td>Color:</td>
							<td style="padding-left:20px;"><?php foreach ($product as $p){ foreach($p->productmetas as $ps){ if($ps->namemeta == 'color') { echo ucfirst($ps->value); } } } ?></td>
						</tr>

						<tr>
							<td>Category:</td>
							<td style="padding-left:20px;"><?php foreach ($product as $p){ foreach($p->categories as $ps){ ?><a href="<?php echo $ps->id; ?>"> <?php echo ucfirst($ps->catname).'<span class="hide-cate-icon"> &raquo; </span>'; } } ?></a></td>
						</tr>
                        
                        <tr>
							<td>Shop:</td>
							<td style="padding-left:20px;"><?php foreach ($product as $p){ ?><a href="{{url('/singleShop/'.$p->user->id)}}">
                            @if($p->user->shop->name == '')    
                                {{$p->user->name}}
                            @else
                                {{$p->user->shop->name}}
                            @endif    
                            <?php } ?>
                            </a></td>
						</tr>
                        
						<style>
							.color-quality span.hide-cate-icon {

							}
						</style>

					</table>
				</div>
			</div>

			<div class="occasion-cart">
				<button type="button" class="item_add hvr-outline-out button2" id="addToCart" style="color: #fff; padding:9px; font-size:16px;">ADD TO CART</button>
			</div>

		</div>
		<div class="clearfix"> </div>

		<div class="bootstrap-tab animated wow slideInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;">
			<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
				<ul id="myTab" class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Description</a></li>
					<li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Reviews(1)</a></li>
					<li role="presentation" class="dropdown">
						<a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">Information <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
							<li><a href="#dropdown1" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">cleanse</a></li>
							<li><a href="#dropdown2" tabindex="-1" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">fanny</a></li>
						</ul>
					</li>
				</ul>
				<div id="myTabContent" class="tab-content">
					<style>
						.bootstrap-tab-text h5.pdis {
							margin: 0px;
							margin-bottom: 5px;
						}
					</style>
					<div role="tabpanel" class="tab-pane fade in active bootstrap-tab-text" id="home" aria-labelledby="home-tab">
						<h5 class="pdis">Product Brief Description</h5>
						<p><?php foreach ($product as $p){ foreach($p->productmetas as $ps){ if($ps->namemeta == 'description') { echo $ps->value; } } } ?></p>
						<br>
						<style>
							#home table tr {
								border-bottom: 1px solid #F3EFEF;
							}
							#home table tr td {
								padding-left: 30px;
							}
							#home table th, #home table td {
								padding-bottom: 15px;
								padding-top: 15px;
							}

						</style>
						<table border="0" style="border-collapse:collapse;">

                            <?php
                            foreach ($product as $p){
                                foreach($p->productmetas as $p){
                                    if($p->namemeta!='description') {
                                        echo "<tr><th>".ucwords($p->namemeta)."</th><td>".$p->value."</td></tr>";
                                    }
                                }
                            }
                            ?>

						</table>
					</div>
					<style>
											/*form star design*/
											form .stars {
											  background: url("{{asset('vendor/singleProduct/images/stars.png')}}") repeat-x 0 0;
											  width: 150px;
											}
											
											form .stars input[type="radio"] {
											  position: absolute;
											  opacity: 0;
											  filter: alpha(opacity=0);
											}
											form .stars input[type="radio"].star-5:checked ~ span {
											  width: 100%;
											}
											form .stars input[type="radio"].star-4:checked ~ span {
											  width: 80%;
											}
											form .stars input[type="radio"].star-3:checked ~ span {
											  width: 60%;
											}
											form .stars input[type="radio"].star-2:checked ~ span {
											  width: 40%;
											}
											form .stars input[type="radio"].star-1:checked ~ span {
											  width: 20%;
											}
											form .stars label {
											  display: block;
											  width: 30px;
											  height: 30px;
											  margin: 0!important;
											  padding: 0!important;
											  text-indent: -999em;
											  float: left;
											  position: relative;
											  z-index: 10;
											  background: transparent!important;
											  cursor: pointer;
											}
											form .stars label:hover ~ span {
											  background-position: 0 -60px;
											}
											form .stars label.star-5:hover ~ span {
											  width: 100% !important;
											}
											form .stars label.star-4:hover ~ span {
											  width: 80% !important;
											}
											form .stars label.star-3:hover ~ span {
											  width: 60% !important;
											}
											form .stars label.star-2:hover ~ span {
											  width: 40% !important;
											}
											form .stars label.star-1:hover ~ span {
											  width: 20% !important;
											}
											form .stars span {
											  display: block;
											  width: 0;
											  position: relative;
											  top: 0;
											  left: 0;
											  height: 30px;
											  background: url("{{asset('vendor/singleProduct/images/stars.png')}}") repeat-x 0 -60px;
											  -webkit-transition: -webkit-width 0.5s;
											  -moz-transition: -moz-width 0.5s;
											  -ms-transition: -ms-width 0.5s;
											  -o-transition: -o-width 0.5s;
											  transition: width 0.5s;
											}
                                            .bootstrap-tab-text-grid-left {
                                                width: 12%;
                                            }
                                            .bootstrap-tab-text-grid-left img {
                                                width: 70%;
                                            }
                                            .bootstrap-tab-text-grid-right {
                                                width: 50%;
                                                text-align: justify;
                                                float: left;
                                            }
                                            .bootstrap-tab-text-grid-right ul li:nth-child(2) {
                                                float: none;
                                                padding-left: 5px;
                                                font-size: 11px;
                                                vertical-align: top;
                                            }
                                            .comment-static-rating {
                                                margin-top: 5px;
                                            }
                                            .comment-static-rating img {
											    width: 17px;
										    }
                                            .bootstrap-tab-text-grid-right p {
                                                margin: 0px;
                                                margin-top: 10px;
                                            }
                                            .add-review h4 {
                                                margin: 0;
                                                margin-top: 50px;
                                            }
                                            .add-review form {
                                                margin: 1.3em 0 0;
                                            }
                                   </style>										
					
					<div role="tabpanel" class="tab-pane fade bootstrap-tab-text" id="profile" aria-labelledby="profile-tab">
						<div class="bootstrap-tab-text-grids">
							<div class="bootstrap-tab-text-grid">
								<div class="bootstrap-tab-text-grid-left">
									<img src="{{asset('vendor/singleProduct/images/men3.jpg')}}" alt=" " class="img-responsive">
								</div>
								<div class="bootstrap-tab-text-grid-right">
									<ul>
										<li><a href="#">Admin</a></li>
										<li>4 weeks ago</li>
									</ul>
									
									<div class="stars-static comment-static-rating"><img src="{{asset('vendor/singleProduct/images/star-single.png')}}" title="1"><img src="{{asset('vendor/singleProduct/images/star-single.png')}}" title="2"><img src="{{asset('vendor/singleProduct/images/star-single.png')}}" title="3"><img src="{{asset('vendor/singleProduct/images/star-single-blank.png')}}" title="4"><img src="{{asset('vendor/singleProduct/images/star-single-blank.png')}}" title="5"></div>
									
									<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
										suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem
										vel eum iure reprehenderit.</p>
								</div>
								<div class="clearfix"> </div>
							</div>
                        
                            <div class="bootstrap-tab-text-grid">
								<div class="bootstrap-tab-text-grid-left">
									<img src="{{asset('vendor/singleProduct/images/men3.jpg')}}" alt=" " class="img-responsive">
								</div>
								<div class="bootstrap-tab-text-grid-right">
									<ul>
										<li><a href="#">Admin</a></li>
										<li>4 weeks ago</li>
									</ul>
									
									<div class="stars-static comment-static-rating"><img src="{{asset('vendor/singleProduct/images/star-single.png')}}" title="1"><img src="{{asset('vendor/singleProduct/images/star-single.png')}}" title="2"><img src="{{asset('vendor/singleProduct/images/star-single.png')}}" title="3"><img src="{{asset('vendor/singleProduct/images/star-single-blank.png')}}" title="4"><img src="{{asset('vendor/singleProduct/images/star-single-blank.png')}}" title="5"></div>
									
									<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
										suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem
										vel eum iure reprehenderit.</p>
								</div>
								<div class="clearfix"> </div>
							</div>

                        
                        
							<div class="add-review">
								@if(!Auth::check())
									<div class="login_register_link">If you want to review & rate this product then <a class="login" href="{{url('/login')}}">login</a> or <a class="register" href="{{url('/register')}}">register</a> to this site
									</div>
								
								@else
								<h4>add a review</h4>
								<form class="comment_form">
                                <p>Rate This Product </p>
                                <div class="stars comment-form-rating" style="margin-bottom:10px;">
                                    <input type="radio" name="productrating" class="star-1" id="star-1" value="1" />
                                    <label class="star-1" for="star-1" title="1">1</label>
                                    <input type="radio" name="productrating" class="star-2" id="star-2" value="2" />
                                    <label class="star-2" for="star-2" title="2">2</label>
                                    <input type="radio" name="productrating" class="star-3" id="star-3" value="3" />
                                    <label class="star-3" for="star-3"  title="3">3</label>
                                    <input type="radio" name="productrating" class="star-4" id="star-4" value="4" />
                                    <label class="star-4" for="star-4" title="4">4</label>
                                    <input type="radio" name="productrating" class="star-5" id="star-5" value="5" />
                                    <label class="star-5" for="star-5" title="5">5</label>
                                    <span></span>
                                 </div>

								 <textarea id="comment_body">Message...</textarea>
								 <input type="button" value="Review" id="review">
								</form>
								@endif
							</div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane fade bootstrap-tab-text" id="dropdown1" aria-labelledby="dropdown1-tab">
						<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
					</div>
					<div role="tabpanel" class="tab-pane fade bootstrap-tab-text" id="dropdown2" aria-labelledby="dropdown2-tab">
						<p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //single -->
<!-- //product-nav -->

<script>
    $(document).ready(function(){
        $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
        var url = "{{URL::to('/')}}";

        //add start
        $("#addToCart").click(function(){
            //alert("clicked");
            $.ajax({
                type: "POST",
                url: url + '/user/addcart',
                data:{
                    pid:$("#pid").val(),
                    quantity:$("#quantity").val(),
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
        
        
        //Comment Start
        $("#review").click(function(){
            //alert($('input[name=productrating]:checked').val());
            $.ajax({
                type: "POST",
                url: url + '/comment',
                data:{
                    pid:$("#pid").val(),
                    rating:$('input[name=productrating]:checked').val(),
                    comment_body:$("#comment_body").val(),
                },
                success: function (data) {
                    //console.log(data);
                    alert(data.mesage);                    
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });

        });
        
        //Comment End

    });
</script>
@endsection

