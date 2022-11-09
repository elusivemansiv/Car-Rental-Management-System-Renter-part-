<?php
use Illuminate\Support\Facades\Request;
?>
@extends('Renter_Pages.Renter_nav.renter_nav')
@section("renter_main")
@foreach ($s_user as $s_user )

  
  
     
        <div class="col-md-10 col-lg-8 col-xl-10">
         
            <div class="table align-middle mb-2 bg-white">
            <div class="row justify-content-center">

                

         <form action="{{ route('postNewCarVideo') }}" method="POST"  class="" enctype="multipart/form-data">

             @if(Session::has('success'))
             <div class="alert alert-success">{{Session::get('success')}}</div>
             @endif
              @if(Session::has('fail'))
             <div class="alert alert-danger">{{Session::get('fail')}}</div>
               @endif

            {{@csrf_field()}}

<div class="row mb-4">
<p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4" align="center">Post Car Video</p>
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

<div class="form-outline mb-4 text-secondary">
<label class="form-check form-check-inline" for="form3Example1c">Select Date</label><br>
<input type="date" name="v_post_date"   value=""><br>
<span class="text-danger">@error('v_post_date') {{$message}} @enderror</span>
</div>

<div class="form-outline mb-4 text-secondary">
<label class="form-check form-check-inline" for="form3Example1c">Select Video</label><br>
<input type="file" name="video"   value=""><br>
<span class="text-danger">@error('video') {{$message}} @enderror</span>
</div>


<button type="submit" class="btn btn-primary btn-block mb-4">Upload</button>

</form>


</div>
</div>
  
              </div>
          
              
            
            
              @endforeach
@endsection
