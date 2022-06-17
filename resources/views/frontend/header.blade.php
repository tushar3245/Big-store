


<a href="offer.html"><img src="{{asset('frontend')}}/images/download.png" class="img-head" alt=""></a>
<div class="header">

		<div class="container">
			
			<div class="logo">
				<h1 ><a href="{{url('/')}}"><b>T<br>H<br>E</b>Big Store<span>The Best Supermarket</span></a></h1>
			</div>
			<div class="head-t">
				<ul class="card">
					<li><a href="{{url('/wishlist')}}" ><i class="fa fa-heart" aria-hidden="true"></i>Wishlist</a></li>
@if(Auth::check())




<li>
<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
<i class="fa fa-user" aria-hidden="true"></i>{{ __('Logout') }}
</a>    
<form id="frm-logout" action="{{ url('user-logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>

</li>











@else
	<li><a href="{{url('user-login')}}" ><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>






					<li><a href="{{url('user-register')}}" ><i class="fa fa-arrow-right" aria-hidden="true"></i>Register</a></li>
					@endif
					<li><a href="about.html" ><i class="fa fa-file-text-o" aria-hidden="true"></i>Order History</a></li>
					<li><a href="shipping.html" ><i class="fa fa-ship" aria-hidden="true"></i>Shipping</a></li>
				</ul>	
			</div>
			
			<div class="header-ri">
				<ul class="social-top">
					<li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
				</ul>	
			</div>
		

				<div class="nav-top">
					<nav class="navbar navbar-default">
					
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						

					</div> 
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav ">
							<li class=" active"><a href="{{asset ('/')}}" class="hyper "><span>Home</span></a></li>	
							@foreach ($categories as $category)
							<li class="dropdown ">
								<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>{{$category->name}}<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi">
									<div class="row">
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
											@foreach ($category->subcategories as $subcategory)
												<li><a href="{{url('category-wise-product/'.$subcategory->id)}}"><i class="fa fa-angle-right" aria-hidden="true"></i>{{$subcategory->name}}</a></li>
												@endforeach
										
											</ul>
										
										</div>
								
										<div class="clearfix"></div>
									</div>	
								</ul>
							</li>
						@endforeach
							
							
							<li><a href="codes.html" class="hyper"> <span>Codes</span></a></li>
							<li><a href="contact.html" class="hyper"><span>Contact Us</span></a></li>
						</ul>
					</div>
					</nav>
@php 
$cartCollection = \Cart::getContent();
@endphp

					 <div class="cart" >
					
				<a href="{{url('/cart')}}">		<span class="fa fa-shopping-cart"><span class="badge">{{ $cartCollection->count()}}</span></span></a>
					</div>
					<div class="clearfix"></div>
				</div>
					
				</div>			
</div>