


@extends('frontend.master')
@section('mainsection')
<div class="banner-top">
	<div class="container">
		<h3 >{{$subcategory->name}}'s Product </h3>
		<h4><a href="{{url('/')}}">Home</a><label>{{$subcategory->name}}'s Product</label></h4>
		<div class="clearfix"> </div>
	</div>
</div>

		
		
		
	
		<!---->
<div class="content-top offer-w3agile">
	<div class="container ">
			<div class="spec ">
				<h3>{{$subcategory->name}}'s Product</h3>
					<div class="ser-t">
						<b></b>
						<span><i></i></span>
						<b class="line"></b>
					</div>
			</div>
						<div class=" con-w3l wthree-of">
						@forelse($product as $product)	
						
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
											<a href="{{url('product-detials/'.$product->id)}}" >  <button class="btn btn-danger my-cart-btn my-cart-b" data-id="5" data-name="Lays" data-summary="summary 5" data-price="0.70" data-quantity="1" data-image="{{asset('frontend')}}/images/of4.png">View details</button></a>
										</div>
									</div>
								</div>
							</div>

@empty

<div class="text-center">
<h3>NO product found</h3>
</div>



					@endforelse
							<div class="clearfix"></div>
						 </div>
					</div>
				</div>
				@endsection