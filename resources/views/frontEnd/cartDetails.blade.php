<!--Extend welcome.blade-->
@extends('frontEnd.welcome')
<!--Start Dynamic Title From welcome.blade-->
@section('title')
Cart Details | IDB Shop
@endsection

<!--Start Dynamic Section From welcome.blade-->
@section('mainContent')
<!-- banner -->
<?php use App\Product;?>
<div class="page-head">
	<div class="container">
		<h3>Cart Details</h3>
	</div>
</div>
<!-- //banner -->
<!-- check out -->
<div class="checkout">
	<div class="container">
		<h3>My Shopping Bag</h3>
		<div class="table-responsive checkout-right animated wow slideInUp" data-wow-delay=".5s">
			<table class="timetable_sub">
				<thead>
					<tr>
						<th>Remove</th>
						<th>Product</th>						
						<th>Product Name</th>
						<th>Quantity</th>
						<th>Unit Price</th>
						<th>Sub Total</th>
					</tr>
				</thead>
				
				<?php
                /*
                        $singleimage = "";
                
                        foreach ($single_product as $p){
                            foreach($p->productimages as $pimage){
                                $singleimage.=$pimage->imagename;
                                    if($singleimage>1){
                                        break;
                                }
                            }  
                        } 
                        
                        */
                        ?>
                        
                        
				@foreach(Cart::content() as $row)
					<tr class="rem1">
						<td class="invert-closeb">
							<div class="rem">
                                <button id="removeitem" class="btn btn-danger" type="button" value="{{$row->rowId}}">&times;</button>
							</div>
						</td>
						
						
						
						<?php
						$singleimage = Product::find($row->id)->productimages;
                        $simg = "";
						foreach($singleimage as $simage){
                                $simg.=$simage->imagename;
                            if($simg>1){
                                break;
                            }
                        }
				    ?>        
                        
                        
                        
						<td class="invert-image"><img src="{{asset('images/product/')}}/{{$simg}}" alt=" " class="img-responsive center-block" style="width:100px;" />
						</td>
				
						<td class="invert">{{$row->name}}</td>
						<td class="invert">
							 <div class="quantity"> 
								<div class="quantity-select">                           
									<div class="entry value-minus">&nbsp;</div>
									<div class="entry value"><span>{{$row->qty}}</span></div>
									<div class="entry value-plus active">&nbsp;</div>
									<button class="btn btn-info btn-xs updatequantitybtn" data-id="{{$row->rowId}}">Update</button>
								</div>
								 
							</div>
						</td>
						<td class="invert">{{$row->price}}</td>
						
						<?php
                        $price = $row->price;
                        $qty = $row->qty;
                        
                        $subtotal = $price*$qty;
                            
                        ?>
						
						<td class="invert">{{$subtotal}}</td>
					</tr>
					
					@endforeach
					
								<!--quantity-->
									<script>
									$('.value-plus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
										divUpd.text(newVal);
									});

									$('.value-minus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
										if(newVal>=1) divUpd.text(newVal);
									});
									</script>
								<!--quantity-->
			</table>
		</div>
                
		<div class="checkout-left">
                    
				
				<div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s" style="margin-right:5px;">
					<a href="{{url('/emptycart')}}"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Empty Cart</a>
				</div>
				
				<div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s" style="margin-right:5px;">
					<a href="{{url('/')}}"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Back To Shopping</a>
				</div>
				
				<div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s">
                                                                                <a href="{{url('/checkout')}}">Proceed To Checkout <span class="glyphicon glyphicon-menu-right" aria-hidden="true" style="padding-left: 10px;"></span></a>
				</div>
				
                    <div class="col-md-4">
                            <div class="checkout-left-basket animated wow slideInLeft" data-wow-delay=".5s" style="width:100%;">
					<h4>Total Amount</h4>
					<ul>
				    <li>Total <i>-</i> <span>{{Cart::subtotal()}}</span></li>
					</ul>
				</div>
                                                                </div>
				
				<div class="clearfix"> </div>
                            </div>
                    
	</div>
</div>	
<!-- //check out -->
<!-- //product-nav -->

<script>
$(document).ready(function(){
    
    $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
    
    var url = "{{URL::to('/')}}";
    
  //remove single item  start
    $(".timetable_sub").on('click','#removeitem',function(){
        var removebtn = $(this).parents('.rem1');
        //alert($("#removeitem").val());
        $.ajax({
                type: "DELETE",
                url: url + '/user/removeitem/'+$(this).val(),
                success: function (data) {
                    if(data.message =='Removed'){
                    //removebtn.remove();
                    //    updatecart();
						location.reload();
                    }
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });   
        });
    
    //remove single item end
    
    
    //update cart div start
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
    //update cart div end
        
    //empty cart start

        $("#empty_cart").click(function(){
            //alert("clicked");
            $.ajax({
                type: "DELETE",
                url: url + '/user/emptycart',
                success: function (data) {

                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
            

        });

        //empty cart end
//update single item quantity
$(".timetable_sub").on("click",".updatequantitybtn",function(){
   // alert($(this).attr("data-id"));
	//var q = $(this).parent().find(".entry.value").text();
	//alert(q);
    $.ajax({
        type: "POST",
        url: url + '/user/updatecartitem',
		data:{
            rowid:$(this).attr("data-id"),
			quantity:$(this).parent().find(".entry.value").text(),
		},
        success: function (data) {
            alert(data.message);
            if(data.message=='updated')
            location.reload();
            },
        error: function (data) {
            console.log('Error:', data);
        }
    });
    //
});
//

});
</script>

@endsection

