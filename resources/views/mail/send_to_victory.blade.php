@extends("frontend.layout")
@section("home")
<div class="founder-over">
	<div class="jframe-sucess">
		<div class="title-txt">Xin chào,<b style="color: #d63031;">{{ $email }}</b><img src="{{ asset('frontend/assets/img/victory.png') }}" alt="" width="30px"></div>
		<div class="wrapper">
			<p>Cảm ơn bạn đã quan tâm đến các sản phẩm bất động sản của chúng tôi. Chúng tôi sẽ sớm phản hồi lại với bạn thông qua email bạn vừa đăng kí !</p>
		</div>
		<div class="btn-back"><a href="{{ url('/') }}">Quay lại trang chủ</a></div>
	</div>
</div>
@endsection