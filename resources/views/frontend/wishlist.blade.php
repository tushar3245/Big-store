
@extends('frontend.master')
@section('mainsection')
   <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >Wishlist</h3>
		<h4><a href="index.html">Home</a><label>/</label>Wishlist</h4>
		<div class="clearfix"> </div>
	</div>
</div>

	<!-- contact -->
		<div class="check-out">	 
		<div class="container">	 
	 <div class="spec ">
				<h3>Wishlist</h3>
					<div class="ser-t">
						<b></b>
						<span><i></i></span>
						<b class="line"></b>
					</div>
			</div>
				<script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cross').fadeOut('slow', function(c){
							$('.cross').remove();
						});
						});	  
					});
			   </script>
			<script>$(document).ready(function(c) {
					$('.close2').on('click', function(c){
						$('.cross1').fadeOut('slow', function(c){
							$('.cross1').remove();
						});
						});	  
					});
			   </script>	
			   <script>$(document).ready(function(c) {
					$('.close3').on('click', function(c){
						$('.cross2').fadeOut('slow', function(c){
							$('.cross2').remove();
						});
						});	  
					});
			   </script>	
 <table class="table ">
		  <tr>
			<th class="t-head head-it ">Products</th>
			<th class="t-head">Price</th>
		<th class="t-head">Quantity</th>

			<th class="t-head">Purchase</th>
		  </tr>
		  <tr class="cross">
			<td class="ring-in t-data">
				<a href="single.html" class="at-in">
					<img src="images/wi.png" class="img-responsive" alt="">
				</a>
			<div class="sed">
				<h5>{{$products->price}}</h5>
			</div>
				<div class="clearfix"> </div>
				<div class="close1"> <i class="fa fa-times" aria-hidden="true"></i></div>
			 </td>
			<td class="t-data">$10.00</td>
			<td class="t-data">
            <form action="{{url('update-cart') }}" method="POST">
                                      @csrf
                                      <input type="hidden" name="id" value="cartItem->id" >
                                    <input type="number" name="quantity" value=" cartItem->quantity " 
                                    class="w-6 text-center bg-gray-300" />
                                    <button type="submit" class="px-2 pb-2 ml-2 text-white bg-blue-500">update</button>
                                    </form>
			
			</td>								
									
								
						
			
			</td>

			<td class="t-data t-w3l"><a class=" add-1" href="single.html">Add To Cart</a></td>
			
		  </tr>
		  <tr class="cross1">
		  <td class="t-data ring-in"><a href="single.html" class="at-in"><img src="images/wi1.png" class="img-responsive" alt=""></a>
			<div class="sed">
				<h5>Sed ut perspiciatis unde</h5>
			</div>
			<div class="clearfix"> </div>
							<div class="close2"> <i class="fa fa-times" aria-hidden="true"></i></div>
</td>
			<td class="t-data">$20.00</td>
		<td class="t-data"><div class="quantity"> 
								<div class="quantity-select">            
									<div class="entry value-minus">&nbsp;</div>
										<div class="entry value"><span class="span-1">1</span></div>									
									<div class="entry value-plus active">&nbsp;</div>
								</div>
							</div>
			
			</td>

			<td class="t-data t-w3l"><a class=" add-1" href="single.html">Add To Cart</a></td>
			
		  </tr>
		  <tr class="cross2">
		  <td class="t-data ring-in"><a href="single.html" class="at-in"><img src="images/wi2.png" class="img-responsive" alt=""></a>
			<div class="sed">
				<h5>Sed ut perspiciatis unde</h5>
			</div>
			<div class="clearfix"> </div>
				<div class="close3"> <i class="fa fa-times" aria-hidden="true"></i></div>
			</td>
			<td class="t-data">$15.00</td>
			<td class="t-data"><div class="quantity"> 
								<div class="quantity-select">            
									<div class="entry value-minus">&nbsp;</div>
										<div class="entry value"><span class="span-1">1</span></div>									
									<div class="entry value-plus active">&nbsp;</div>
								</div>
							</div>
			
			</td>

			<td class="t-data"><a class=" add-1" href="single.html">Add To Cart</a></td>
			
		  </tr>
	</table>
		 </div>
		 </div>
		 				
	
			
@endsection