@extends('layouts.adminapp')
@section('title') Update Product @endsection
@section('content')
<div class="justify-content-center d-flex">
		<form action="{{ route('product-update-submit', $data->id)}}"  style="width: 500px; margin-top: 100px" method="post">
						@csrf

						<h4 class="mtext-105 cl2 txt-center p-b-30">
							Update
						</h4>
						@include('inc.messages')
						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="title" value="{{ $data->title }}">
						</div>

						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="price" value="{{ $data->price }}">
						</div>

						<div class="bor8 m-b-30">
							<textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="description" placeholder="Description">{{ $data->description }}</textarea>
						</div>

						<div class="bor8 m-b-20 how-pos4-parent">
							<select name="category" class="form-control">
  								<option>men</option>
								<option>women</option>
								<option>bag</option>
								<option>shoes</option>
								<option>watches</option>
							</select>
						</div>

						<button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer" type="submit">
							Update
						</button>
			</form>
			</div>
@endsection