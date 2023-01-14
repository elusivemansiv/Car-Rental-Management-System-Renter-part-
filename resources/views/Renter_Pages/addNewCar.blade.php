<?php
use Illuminate\Support\Facades\Request;
?>
@extends('Renter_Pages.Renter_nav.renter_nav')
@section("renter_main")
@foreach ($s_user as $s_user )

  
  
     
        <div class="col-md-10 col-lg-8 col-xl-10">
         
            <div class="table align-middle mb-2 bg-white">
            <div class="row justify-content-center">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Post New Car</p>

                <form action="{{ route('addNewCar') }}" method="POST"  class="" enctype="multipart/form-data">

@if(Session::has('success'))
<div class="alert alert-success">{{Session::get('success')}}</div>
@endif
@if(Session::has('fail'))
<div class="alert alert-danger">{{Session::get('fail')}}</div>
@endif

{{@csrf_field()}}

<div class="row mb-4">
<div class="col-sm-9 text-secondary">
<div class="form-outline">

<input type="hidden" name="username" value="{{  $s_user->username }}" class="form-control" />

</div>
</div>
<div class="col-sm-9 text-secondary">
<div class="form-outline">

<input type="hidden" name="id"  value="{{  $s_user->id }}" class="form-control" />

</div>
</div>
</div>

<div class="row mb-4">
<div class="col text-secondary">
<div class="form-outline">
<label class="form-label" for="form6Example1">Car name</label>
<input type="text" name="car_name" id="form6Example1" value="{{old('car_name')}}" class="form-control" />

<span class="text-danger">@error('car_name') {{$message}} @enderror</span>
</div>
</div>
<div class="col text-secondary">
<div class="form-outline">
<label class="form-label" for="form6Example2">Car model</label>
<input type="text" name="car_model" id="form6Example2" value="{{old('car_model')}}" class="form-control" />

<span class="text-danger">@error('car_model') {{$message}} @enderror</span>
</div>
</div>
</div>


<!-- Text input -->
<div class="form-outline mb-4 text-secondary">
<label class="form-label" for="form6Example2">Car Type : </label>
<div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" id="Family" name="car_type" value="Family"@if(Request::old('car_type')=="Family") checked @endif >
      <label class="form-check-label" >Family</label>
    </div>

  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" id="Non-family" name="car_type" value="Non-family"@if(Request::old('car_type')=="Non-family") checked @endif >
  <label class="form-check-label" >Non-family</label>
</div><br>
<span class="text-danger">@error('car_type') {{$message}} @enderror</span>
</div>


<div class="row mb-4 text-secondary">
<div class="col">
<div class="form-outline">
<label class="form-label" for="form6Example2">Car Number</label>
<input type="text" id="form6Example2" name="car_number" value="{{old('car_number')}}" class="form-control" />

</div>
<span class="text-danger">@error('car_number') {{$message}} @enderror</span>
</div>
<div class="col">
<div class="form-outline">
<label class="form-label" for="form6Example1">Rent Price</label>
<input type="text" id="form6Example1" name="rent_price" value="{{old('rent_price')}}" class="form-control" />

</div>
<span class="text-danger">@error('rent_price') {{$message}} @enderror</span>
</div>
</div>

<div class="form-outline mb-4 text-secondary">
<label class="form-label" for="form3Example1c">Date of Buying</label>
<input type="date" name="car_buy_date" value="{{old('car_buy_date')}}" class="form-control" >
<span class="text-danger">@error('car_buy_date') {{$message}} @enderror</span>
</div>

<div class="row mb-4 text-secondary">
<div class="col">
<div class="form-outline">

<label class="form-label text-secondary" for="form6Example1">Choose Color</label><br>
<select class="form-select" name="car_color" value="car_color" >
<option value="">Select Color</option>
<option value="White"@if(Request::old('car_color')=="White") selected @endif>White</option>
<option value="Black"@if(Request::old('car_color')=="Black") selected @endif>Black</option>
<option value="Blue"@if(Request::old('car_color')=="Blue") selected @endif>Blue</option>
</select>
</div>
<span class="text-danger">@error('car_color') {{$message}} @enderror</span>
</div>


<div class="col">
<div class="form-outline">

<label class="form-label text-secondary" for="form6Example2">Choose Sit Number</label><br>
<select class="form-select" value="sit_number" name="sit_number" >
<option value="" >Select Number</option>
<option value="2"@if(Request::old('sit_number')=="2") selected @endif>2</option>
<option value="4"@if(Request::old('sit_number')=="4") selected @endif>4</option>
<option value="8"@if(Request::old('sit_number')=="8") selected @endif>8</option>
</select>
</div>
<span class="text-danger">@error('sit_number') {{$message}} @enderror</span>
</div>
</div>

<div class="form-outline mb-4 text-secondary">
<label class="form-label" >Car details</label>
<textarea class="form-control" id="car_details" name="car_details" rows="4">{{ old('car_details') }}</textarea>

<span class="text-danger">@error('car_details') {{$message}} @enderror</span>
</div>

<div class="form-outline mb-4 text-secondary">
<label class="form-check form-check-inline" for="form3Example1c">Select Car Picture</label><br>
<input type="file" id="carpic" name="car_pic"   value="{{old('car_pic')}}">
<span class="text-danger">@error('car_pic') {{$message}} @enderror</span>
</div>






<!-- Submit button -->
<button type="submit" class="btn btn-primary btn-block mb-4">Upload</button>

</form>


</div>
</div>
  
              </div>
          
              
            
            
              @endforeach
@endsection
