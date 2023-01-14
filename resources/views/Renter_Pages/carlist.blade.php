@extends('Renter_Pages.Renter_nav.renter_nav')
@section("renter_main")


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>CRMS Dashboard-Carlist</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<form action="" method="post">
    {{@csrf_field()}}
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<div class="container">
    <br/>
	<div class="row justify-content-center">
                      
                        
                    </div>
</div>

<style type="text/css">

.form-control-borderless {
    border: none;
}

.form-control-borderless:hover, .form-control-borderless:active, .form-control-borderless:focus {
    border: none;
    outline: none;
    box-shadow: none;
}
</style>


</form>
<h4>Available Car List</h4>
<br>

<div class="row row-cols-1 row-cols-md-4 g-4"style="width: 85rem;">
    @foreach ($car_lists as $car_list)
    <div class="card" style="width: 100rem;">
        
        <div class="card-body">
        <img src="{{asset('pro_images/'.$car_list->car_pic)}}"  width="300" height="300">
        <br><br>
          <H5>Name:{{ $car_list->car_name }}</H5><hr>
          <H5>Model:{{ $car_list->car_model }}</H5><hr>
          <H5><a href="">Details</a></H5><hr>
          <H5>{{ $car_list->rent_price }} <span>TK</span></H5><hr>
          

          

<div class="row">
<div class="col">

<a href="editCarlist/{{$car_list->id}}" class="btn btn-primary">Edit</a>


</div>
<div class="col">
<form action="{{route('delete')}}" method="POST">
          @method('DELETE')
          @csrf
          <input type="text" name="id" value="{{$car_list->id }}" hidden>
        <button class="btn btn-danger">Delete</button>
        </form>

</div>
</div>
        
        </div>
      </div>
      @endforeach
  </div>
<br>




  @endsection