<?php
use Illuminate\Support\Facades\Request;
?>
@extends('Renter_Pages.Renter_nav.renter_nav')
@section("renter_main")

@foreach ($s_user as $s_user )

<form action="{{ route('editProfileSubmit') }}" method="post" enctype="multipart/form-data">

@if(Session::has('success'))
                  <div class="alert alert-success">{{Session::get('success')}}</div>
                  @endif
                  @if(Session::has('fail'))
                  <div class="alert alert-danger">{{Session::get('fail')}}</div>
                  @endif

{{@csrf_field()}}
<div class="container">
		<div class="main-body">
			<div class="row">
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body">
							<div class="d-flex flex-column align-items-center text-center">
								<img src="{{asset('pro_images/'.$s_user->pp)}}" alt="" class="rounded-circle p-1 bg-primary" width="110">
								<div class="mt-3">
									<h4>{{  $s_user->username }}</h4>
									<p class="text-secondary mb-1">{{ $s_user->type }}</p>
									<p class="text-muted font-size-sm">{{ $s_user->address }}</p>
									<!-- <button class="btn btn-primary">Follow</button>
									<button class="btn btn-outline-primary">Message</button> -->
								</div>
							</div>
							<hr class="my-4">
							
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="card">
						<div class="card-body">
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">First Name</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" name="first_name" class="form-control" value="{{  $s_user->first_name }}">
									<span class="text-danger">@error('first_name') {{$message}} @enderror</span>
								</div>
							</div>
                            <div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Last Name</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" name="last_name" class="form-control" value="{{  $s_user->last_name }}">
									<span class="text-danger">@error('last_name') {{$message}} @enderror</span>
								</div>
							</div>
							
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Date of Birth</h6>
								</div>
								<div class="col-sm-9 text-secondary">
                                <input type="date" name="Date_of_birth" class="form-control"  value="{{$s_user->dob}}">
								<span class="text-danger">@error('Date_of_birth') {{$message}} @enderror</span>
									<!-- <input type="text" class="form-control" value="(239) 816-9029"> -->
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Gender</h6>
								</div>


                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" @if($s_user->gender =="Female") value="Female" checked @endif value="Female">
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" @if($s_user->gender =="Male") value="Male" checked @endif value="Male">
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" @if($s_user->gender =="Other") value="Other" checked @endif value="Other">
                    <label class="form-check-label" for="otherGender">Other</label>
                  </div>

				  <span class="text-danger">@error('gender') {{$message}} @enderror</span>

                  
									<!-- <input type="text" class="form-control" value="(320) 380-4539"> -->
								
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Phone Number</h6>
								</div>
								<div class="col-sm-9 text-secondary">
                                <input type="text" name="phone_number" class="form-control"  value="{{$s_user->phone_number}}">
								<span class="text-danger">@error('phone_number') {{$message}} @enderror</span>

								</div>
							</div>
                            <div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Address</h6>
								</div>
								<div class="col-sm-9 text-secondary">
                                <input type="text-area" name="address" class="form-control"  value="{{$s_user->address}}">
								<span class="text-danger">@error('address') {{$message}} @enderror</span>
								</div>
							</div>
                            <div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">NID Number</h6>
								</div>
								<div class="col-sm-9 text-secondary">
                                <input type="text" name="nid_number" class="form-control"  value="{{$s_user->nid_number}}">
								<span class="text-danger">@error('nid_number') {{$message}} @enderror</span>
								</div>
							</div>
                            <div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">DL Number</h6>
								</div>
								<div class="col-sm-9 text-secondary">
                                <input type="text" name="dl_number" class="form-control"  value="{{$s_user->dl_number}}">
								<span class="text-danger">@error('dl_number') {{$message}} @enderror</span>
								</div>
							</div>

							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Upload Photo</h6>
								</div>
								<div class="col-sm-9 text-secondary">
                                <input type="file" name="pp"  value="{{$s_user->pp}}">
								<span class="text-danger">@error('pp') {{$message}} @enderror</span>
								</div>
							</div>
                            

							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9 text-secondary">
                                <button type="submit" class="btn btn-primary btn-lg">Save Changes</button>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
    </form>
    @endforeach




@endsection