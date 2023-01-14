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
				
				</div>
                
				<div class="col-lg-8">
					<div class="card">
						<div class="card-body">
						
						

                            <div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Change Video</h6>
								</div>
								<div class="col-sm-9 text-secondary">
                                <input type="file" name="video"  value="">
								<span class="text-danger">@error('') {{$message}} @enderror</span>
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