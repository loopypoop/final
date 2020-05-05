@extends('layouts.adminapp')
@section('title') Add Image @endsection
@section('content')
<div class="justify-content-center d-flex">
	<div class="justify-content-center d-flex" >
		<form action="{{ route('store') }}" enctype="multipart/form-data" style="width: 500px; margin-top: 100px" method="post">
		@csrf
		<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 form-control"  type="text" name="product_id" value="{{$data->id}}">
			<input type="file" name="img" multiple data-preview-file-type="any" class="form-control ">
			<button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer" type="submit">
				Upload
			</button>
		</form>
	</div>
</div>
@endsection