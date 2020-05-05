@extends('layouts.app')
@section('title') Order @endsection
	@section('content')

  <!--Main layout-->
  <main class="mt-5 pt-4">
    <div class="container wow fadeIn" style="margin-left: 100px">

      <!-- Heading -->
      <h4 class="my-5 h4 text-center"><span class="login100-form-title " style="font-weight: bold">
						Checkout
					</span></h4>

      <!--Grid row-->
      <div class="row" ">
        <!--Grid column-->
        <div class="col-md-6 mb-4" >
				<form class="login100-form validate-form" method="POST" action="{{ route('order-form')}}">
                        @csrf
					
			  <!--Grid row-->
              <div class="row">

                <!--Grid column-->
                <div class="col-md-6 mb-2">

                  <!--firstName-->
                  <div class="md-form ">
                    <span class="txt1 p-b-11">
						First Name
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input  id="first_name" type="text" class="form-control" name="first_name" value="{{Auth::user()->name}}" required autocomplete="first_name" autofocus>
						<span class="focus-input100"></span>
					</div>
                  </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 mb-2">

                  <!--lastName-->
                  <div class="md-form">
                    <span class="txt1 p-b-11">
						Last Name
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input  id="last_name" type="text" class="form-control" name="last_name" value="{{Auth::user()->lastname}}" required autocomplete="last_name" autofocus>
						<span class="focus-input100"></span>
					</div>
                  </div>

                </div>
                <!--Grid column-->

              </div>
              <!--Grid row-->

                  <!--email-->
                  <div class="md-form ">
                    <span class="txt1 p-b-11">
						Email
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input  id="email" type="text" class=" form-control @error('email') is-invalid @enderror" name="email" value="{{Auth::user()->email}}" required autocomplete="email" autofocus>
						<span class="focus-input100"></span>
					</div>
                  </div>

                  <!--address-->
                  <div class="md-form ">
                    <span class="txt1 p-b-11">
						Address
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input  id="address" type="address" class=" form-control " name="address" value="{{Auth::user()->address}}" required autocomplete="email" autofocus>
						<span class="focus-input100"></span>
					</div>
                  </div>
					
				

<!--country-->
                  <div class="md-form ">
                    <span class="txt1 p-b-11">
						Country
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<select class="custom-select d-block w-100" name ="country" id="state" required >
                    	<option value=""></option>
                   		 <option value="kz">Kazakhstan</option>
                   		 <option value="ru">Russia</option>
                   		 <option value="ch">China</option>
                  			</select>
					</div>
                  </div>

                 

                  
				<!--Grid row-->
              <div class="row">

                <!--Grid column-->
                <div class="col-md-6 mb-2">

                   <!--city-->
                  <div class="md-form ">
                    <span class="txt1 p-b-11">
						City
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input  id="city" type="city" class=" form-control " name="city"  required autocomplete="city" autofocus>
						<span class="focus-input100"></span>
					</div>
                  </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 mb-2">

                  <!--zip-->
                  <div class="md-form ">
                    <span class="txt1 p-b-11">
						Zip Code
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input  id="zip" type="zip" class=" form-control " name="zip" value="{{Auth::user()->postcode}}" required autocomplete="zip" autofocus>
						<span class="focus-input100"></span>
					</div>
                  </div>

                </div>
                <!--Grid column-->

              </div>
              <!--Grid row-->

			<!--credit card number-->
                 <div class="md-form ">
                    <span class="txt1 p-b-11">
						Credit Card Number
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input  id="credit" type="credit" class=" form-control " name="credit"  required autocomplete="credit" autofocus>
						<span class="focus-input100"></span>
					</div>
                  </div>

                 

                  
				<!--Grid row-->
              <div class="row">

                <!--Grid column-->
                <div class="col-md-6 mb-2">

                   <!--exp-->
                  <div class="md-form ">
                    <span class="txt1 p-b-11">
						Expiration
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input  id="exp" type="exp" class=" form-control " name="exp"  required autocomplete="exp" autofocus>
						<span class="focus-input100"></span>
					</div>
                  </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 mb-2">

                  <!--cvv-->
                  <div class="md-form ">
                    <span class="txt1 p-b-11">
						CVV
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input  id="cvv" type="cvv" class=" form-control " name="cvv"  required autocomplete="cvv" autofocus>
						<span class="focus-input100"></span>
					</div>
                  </div>

                </div>
                <!--Grid column-->

              </div>
              <!--Grid row-->

              <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
              <input type="hidden" name="item_count" value="{{ \Cart::getTotalQuantity() }}">
              <input type="hidden" name="total_price" value="{{ \Cart::getTotal() }}">
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Proceed
						</button>
					</div>

				</form>
	

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4 mb-4">

          <!-- Heading -->
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted txt1 p-b-11" style="font-size: 20px">Your cart</span>
            <span class="badge badge-secondary badge-pill">{{\Cart::getTotalQuantity()}}</span>
          </h4>

          <!-- Cart -->
          <ul class="list-group mb-3 z-depth-1">
            @foreach(\Cart::getContent() as $item)
					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="images/item-{{ $item->id }}.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								{{ $item->name }}
							</a>
							<span class="header-cart-item-info">
								{{ $item->quantity }} x {{ $item->price }}
							</span>
						</div>
					</li>
					@endforeach
				<div class="w-full">
					<div class="header-cart-item-info w-full p-tb-40">
						Total: ${{ \Cart::getTotal() }}
					</div>
          </ul>
          <!-- Cart -->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

    </div>
  </main>
  <!--Main layout-->

	@endsection