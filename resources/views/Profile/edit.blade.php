
@extends('layouts.app')
@section('title') Edit @endsection
	@section('content')
	<div class="justify-content-center d-flex">
		<form action="{{route('edituser', Auth::user()->id)}}"  style="width: 500px; margin-top: 100px; margin-bottom: 100px;" method="post">
						@csrf

						<h4 class="mtext-105 cl2 txt-center p-b-30">
							Profile
						</h4>
						
						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="lastname" placeholder="lastname:">
						</div>

						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="number" placeholder="number">
						</div>
						
						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="dateofbirth" placeholder="Date of birth: 01.10.1900">
						</div>

						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="address" placeholder="Address:">
						</div>

						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="postcode" placeholder="PostCode:">
						</div>

						<button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer" type="submit">
							Update
						</button>
			</form>
			</div>
	@endsection