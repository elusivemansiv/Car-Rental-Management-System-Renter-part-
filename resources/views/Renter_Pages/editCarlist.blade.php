<?php
use Illuminate\Support\Facades\Request;
?>
@extends('Renter_Pages.Renter_nav.renter_nav')
@section("renter_main")



<form action="{{ route('editCarlistSubmit') }}" method="post" enctype="multipart/form-data">

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
								<img src="{{asset('pro_images/'.$car_list->car_pic)}}" alt="" width="200">
								<div class="mt-3">
					
								<div class="row mb-4">
<div class="col">
</div>
<div class="col">
<div class="form-outline">

<input type="hidden" name="id"  value="{{ $car_list->id }}" class="form-control" />

</div>
</div>
</div>
									
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
									<h6 class="mb-0">Car Name</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" name="car_name" class="form-control" value="{{ $car_list->car_name }}">
									<span class="text-danger">@error('car_name') {{$message}} @enderror</span>
								</div>
							</div>
                            <div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Car Model</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" name="car_model" class="form-control" value="{{ $car_list->car_model}}">
									<span class="text-danger">@error('car_model') {{$message}} @enderror</span>
								</div>
							</div>
							
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Rent Price</h6>
								</div>
								<div class="col-sm-9 text-secondary">
                                <input type="text" name="rent_price" class="form-control"  value="{{$car_list->rent_price }}">
								<span class="text-danger">@error('rent_price') {{$message}} @enderror</span>
									<!-- <input type="text" class="form-control" value="(239) 816-9029"> -->
								</div>
							</div>

							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Details</h6>
								</div>
								<div class="col-sm-9 text-secondary">
								<textarea class="form-control" name="car_details" rows="4"> {{$car_list->car_details}}</textarea>
                                
								<span class="text-danger">@error('car_details') {{$message}} @enderror</span>
								</div>
							</div>

                            <div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Change Photo</h6>
								</div>
								<div class="col-sm-9 text-secondary">
                                <input type="file" name="car_pic"  value="{{$car_list->car_pic}}">
								<span class="text-danger">@error('car_pic') {{$message}} @enderror</span>
								</div>
							</div>

                         
						
                            <div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9 text-secondary">
                                <button type="submit" class="btn btn-warning">Update</button>
								</div>
							</div>
					  

						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
    </form>





@endsection