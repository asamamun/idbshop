
<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-left">
			<h2><a href="index.html"><img src="{{asset('vendor/singleProduct/images/logo3.jpg')}}" alt=" " /></a></h2>
			<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur, adipisci velit, sed quia non 
			numquam eius modi tempora incidunt ut labore 
			et dolore magnam aliquam quaerat voluptatem.</p>
		</div>
		<div class="col-md-9 footer-right">
			<div class="col-sm-6 newsleft">
				<h3>SIGN UP FOR NEWSLETTER !</h3>
			</div>
			<div class="col-sm-6 newsright">
				<form>
					<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="submit" value="Submit">
				</form>
			</div>
			<div class="clearfix"></div>
			<div class="sign-grds">
				<div class="col-md-4 sign-gd">
					<h4>Categories</h4>
					<ul>
						@foreach($categoryname as $catname) 
                            <?php if($catname->parent_id != 1) { ?>
                               <li><a href="#">{{$catname->catname}}</a></li>
                            <?php } ?>
                        @endforeach
					</ul>
				</div>
				
				<div class="col-md-4 sign-gd-two">
					<h4>Store Information</h4>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Address : 1234k Avenue, 4th block, <span>Newyork City.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email : <a href="mailto:info@example.com">info@example.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone : +1234 567 567</li>
					</ul>
				</div>
				<div class="col-md-4 sign-gd flickr-post">
					<h4>Flickr Posts</h4>
					<ul>
						<li><a href="single.html"><img src="{{asset('vendor/singleProduct/images/b15.jpg')}}" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="{{asset('vendor/singleProduct/images/b16.jpg')}}" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="{{asset('vendor/singleProduct/images/b17.jpg')}}" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="{{asset('vendor/singleProduct/images/b18.jpg')}}" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="{{asset('vendor/singleProduct/images/b15.jpg')}}" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="{{asset('vendor/singleProduct/images/b16.jpg')}}" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="{{asset('vendor/singleProduct/images/b17.jpg')}}" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="{{asset('vendor/singleProduct/images/b18.jpg')}}" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="{{asset('vendor/singleProduct/images/b15.jpg')}}" alt=" " class="img-responsive" /></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
		<p class="copy-right">&copy 2016 Smart Shop. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
	</div>
</div>
<!-- //footer -->
