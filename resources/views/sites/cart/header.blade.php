<span>
	<a class="cart-contents" href="{{route('carts.showMyCart')}}" title="View your shopping cart">
		<span class="total">&#036; {{number_format($total_price)}}</span>
		<i class="fa fa-shopping-cart"></i>
		<span class="count">{{$count}}</span>
	</a>
</span>