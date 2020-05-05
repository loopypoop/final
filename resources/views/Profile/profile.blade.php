
@extends('layouts.app')
@section('title') Profile @endsection
	@section('content')

	<div class="m-t-60 py-5">
    <div class="row">
      <div class="col-lg-9 mx-auto">
        <div class="card shadow mb-4">
          <div style="background: url('/images/banner-profile.jpg') no-repeat center / cover" class="card-body shadow-sm p-5">
				<!-- Default breadcrumb-->
				<div class="row">
				<svg style="color: rgba(255, 255, 255, 0.541);; border-radius: 100px; background-color: rgba(34, 34, 34, 0.151);" class="bi bi-people-circle" width="5em" height="5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				<path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 008 15a6.987 6.987 0 005.468-2.63z"/>
				<path fill-rule="evenodd" d="M8 9a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
				<path fill-rule="evenodd" d="M8 1a7 7 0 100 14A7 7 0 008 1zM0 8a8 8 0 1116 0A8 8 0 010 8z" clip-rule="evenodd"/>
				</svg>&emsp;<h1 style="font-size: 5em; color:rgba(255, 255, 255, 0.541);"><b>PROFILE</b></h1>
				</div>

				<br>
				<nav aria-label="breadcrumb">
              <ol class="breadcrumb" style="background-color: rgba(255, 255, 255, 0.541);">
                <!--<li class="breadcrumb-item"><a href="{{route('home')}}" class="text-uppercase">Home</a></li>-->
                <li class="breadcrumb-item"><a href="/Admin" class="text-uppercase">{{Auth::user()->name}}</a></li>
              </ol>
            </nav>
			 </div>
			 
        </div>




	<section class="py-1 header">
    <div class="container py-4">


        <div class="row">
            <div class="col-md-3">
                <!-- Tabs nav -->
                <div style="border-radius: 5px"class="nav flex-column nav-pills bg-light nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link mb-3 p-3 shadow bg-light" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                        <i class="fa fa-user-circle-o mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Personal information</span></a>

                    <a class="nav-link mb-3 p-3 shadow bg-light" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                        <i class="fa fa-calendar-minus-o mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Orders</span></a>

                    <a class="nav-link mb-3 p-3 shadow bg-light" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                        <i class="fa fa-star mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Wish List</span></a>

                    <a class="nav-link mb-3 p-3 shadow bg-light" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                        <i class="fa fa-check mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Reviews</span></a>
						  </div>
						  
            </div>


            <div class="col-md-9">
                <!-- Tabs content -->
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade shadow rounded bg-light show active p-5" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="row"><h4 class="font-italic mb-4">Personal information</h4>&emsp;<a href="{{route('edit')}}"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i></a></div>
								<table style="width:400px">
                                <tr>
                                <td><p class="font-italic text-muted mb-2">Name:</p></td><td><p class="font-italic text-muted mb-2"> {{Auth::user()->name}}</p></td>
                                </tr><tr>
                                <td><p class="font-italic text-muted mb-2">Lastname:</p></td><td> <p class="font-italic text-muted mb-2">{{Auth::user()->lastname}}</p></td>
                                </tr><tr>
                                <td><p class="font-italic text-muted mb-2">Email:</p></td><td> <p class="font-italic text-muted mb-2">{{Auth::user()->email}}</p></td>
                                </tr><tr>
                                <td><p class="font-italic text-muted mb-2">Number:</p></td><td><p class="font-italic text-muted mb-2"> {{Auth::user()->number}}</p></td>
                                </tr><tr>
                                <td><p class="font-italic text-muted mb-2">Date of birth:</p></td><td><p class="font-italic text-muted mb-2"> {{Auth::user()->dateofbirth}}</p></td>
                                </tr><tr>
                                <td><p class="font-italic text-muted mb-2">Address:</p></td><td><p class="font-italic text-muted mb-2"> {{Auth::user()->address}}</p></td>
                                </tr><tr>
                                <td><p class="font-italic text-muted mb-2">Post Code:</p></td><td><p class="font-italic text-muted mb-2"> {{Auth::user()->postcode}}</p></td>
                                </tr>
                                </table>
								@if (Auth::user()->lastname == null)
								<div style="background-color: rgba(59, 59, 59, 0.226);" class="alert">
									<strong>You</strong> must fill in your <a href="#">details</a>.
								</div>
								@endif
                    </div>
                    
                    <div class="tab-pane fade shadow rounded bg-light p-5" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <h4 class="font-italic mb-4">Orders</h4>
									
                    </div>
                    
                    <div class="tab-pane fade shadow rounded bg-light p-5" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <h4 class="font-italic mb-4">Reviews</h4>
                        <p class="font-italic text-muted mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    
                    <div class="tab-pane fade shadow rounded bg-light p-5" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <h4 class="font-italic mb-4">Confirm booking</h4>
                        <p class="font-italic text-muted mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>
        </div>
	 </div>
</div>
</div>
</div>
</section>

	@endsection
