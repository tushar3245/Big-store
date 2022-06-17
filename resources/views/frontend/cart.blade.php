@extends('frontend.master')

@section('mainsection')
 <!--banner-->
 <div class="banner-top">
	<div class="container">
		<h3 >Cart</h3>
		<h4><a href="index.html">Home</a><label>/</label>Cart</h4>
		<div class="clearfix"> </div>
	</div>
</div>
<div class="container text-left" style="margin-top:40px">
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
</div>
	<!-- contact -->
		<div class="check-out">	 
		<div class="container">	 
	 <div class="spec ">
				<h3>Cart</h3>
					<div class="ser-t">
						<b></b>
						<span><i></i></span>
						<b class="line"></b>
					</div>
			</div>




					
<table class="table ">
		  <tr>
			<th class="t-head head-it ">Products</th>
			<th class="t-head">Price</th>
		<th class="t-head">Quantity</th>
        <th class="t-head">Total</th>
		<th class="t-head">Action</th>
		  </tr>

		  @forelse($cartItems as $cartItem)
@php 

$product = App\Product::find($cartItem->id);

@endphp
         
		  <tr>
			<td class="t-data">
				<a href="single.html" class="at-in">
					<img src="{{asset($product->image)}}" class="img-responsive" alt="" width="100px">
				</a>
			<div class="sed">
				<h5>{{$product->name}}</h5>
			</div>
				<div class="clearfix"> </div>
				<div class="close1"> <i class="fa fa-times" aria-hidden="true"></i></div>
			 </td>
			<td class="t-data">{{$product->price}}</td>
			<td class="t-data">
			<form action="{{url('update-cart') }}" method="POST">
                                      @csrf
                                      <input type="hidden" name="id" value="{{ $cartItem->id}}" >
                                    <input type="number" name="quantity" value="{{ $cartItem->quantity }}" 
                                    class="w-6 text-center bg-gray-300" />
                                    <button type="submit" class="px-2 pb-2 ml-2 text-white bg-blue-500">update</button>
                                    </form>
			
			</td>












            <td class="t-data">{{$product->price * $cartItem->quantity}} </td>
			
			


			
			
		 <td class="t-data"><a href="{{url('remove/'.$cartItem->id)}}"><button type="button" class="btn btn-danger">Remove</button></a></td>
			
		  </tr>
          @empty
          <tr>
              <td>No product pound</td>
</tr>
          @endforelse


		  <tr>
			<th class="t-head head-it "></th>
			<th class="t-head"></th>
		<th class="t-head"></th>
        <th class="t-head">Total: ${{ Cart::getTotal() }}</th>
		<th class="t-head"></th>
		  </tr>









	</table>

<div class="row">
	<div class="col-md-12">
<a href="/" class="btn btn-primary">Continue shopping</button></a>
<a href="{{url('checkout')}}" class="btn btn-success">Checkout</button></a>
</div>
</div>


		 </div>
		 </div>
		 				
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
			


@endsection