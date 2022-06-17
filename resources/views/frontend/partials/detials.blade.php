


@extends('frontend.master')
@section('mainsection')
<div class="banner-top">
	<div class="container">
		<h3 >Product details</h3>
		<h4><a href="{{url('/')}}">Home</a><label>/</label>product details</h4>
		<div class="clearfix"> </div>
	</div>
	<div class="container text-left" style="margin-top:40px">
		              <!-- success-->
					  @if (\Session::has('success_message'))
                              <div class="alert alert-success">
                               
                        {!! \Session::get('success_message') !!}
                                
                                  </div>
                                @endif
              <!-- ============================================================== -->
                              <!-- unsuccess-->


                              @if (\Session::has('error_message'))
                              <div class="alert alert-success">
                               
                               {!! \Session::get('error_message') !!}
                                
                                  </div>
                                @endif
              <!-- ============================================================== -->
</div>
</div>
		<div class="single">
			<div class="container">
						<div class="single-top-main">
	   		<div class="col-md-5 single-top">
	   		<div class="single-w3agile">
							
<div id="picture-frame">
			<img src="{{asset($product->image)}}" data-src="{{asset($product->image)}}" alt="" class="img-responsive"/>
		</div>
										<script src="{{asset('frontend')}}/js/jquery.zoomtoo.js"></script>
								<script>
			$(function() {
				$("#picture-frame").zoomToo({
					magnify: 1
				});
			});
		</script>
		
		
		
			</div>
			</div>
			<div class="col-md-7 single-top-left ">
								<div class="single-right">
				<h3>{{$product->name}}</h3>
				
					
				 <div class="pr-single">
				  <p class="reduced "><del>${{$product->price}}</del>${{$product->discounted_price}}</p>
				</div>
				
				<p class="in-pa">{!!$product->description!!} </p>
			   	
				<ul class="social-top">
					<li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
				</ul>

<form action="{{url('/add-to-cart')}}" method="post">
@csrf
<input type="hidden" name="product_id" value="{{$product->id}}">
<label>Quantity:</label></br>
	<label> <input type="number" name="quantity" value="1" min="1" plaseholder="quantity"></label>
					<div class="add add-3">
				   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="Wheat" data-summary="summary 1" data-price="6.00" data-quantity="1" data-image="{{asset('frontend')}}/images/si.jpg">Add to Cart</button>
					</div>
</form>
				
				 
			   
			<div class="clearfix"> </div>
			</div>
		 

			</div>
		   <div class="clearfix"> </div>
	   </div>	
				 
				
	</div>
</div>
		<!---->
<div class="content-top offer-w3agile">
	<div class="container ">
			<div class="spec ">
				<h3>Special Offers</h3>
					<div class="ser-t">
						<b></b>
						<span><i></i></span>
						<b class="line"></b>
					</div>
			</div>
						<div class=" con-w3l wthree-of">
							
						@foreach($releted_product as $product)
							<div class="col-md-3 pro-1">
								<div class="col-m">
									<a href="#"  class="offer-img">
										<img src="{{asset($product->image)}}" class="img-responsive" alt="">
										<div class="offer"><p><span>Offer</span></p></div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html">{{$product->name}}</a>(100 g)</h6>							
										</div>
										<div class="mid-2">
											<p ><label>$1.00</label><em class="item_price">$0.70</em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="5" data-name="Lays" data-summary="summary 5" data-price="0.70" data-quantity="1" data-image="{{asset('frontend')}}/images/of4.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
					@endforeach
							<div class="clearfix"></div>
						 </div>
					</div>
				</div>
				@endsection