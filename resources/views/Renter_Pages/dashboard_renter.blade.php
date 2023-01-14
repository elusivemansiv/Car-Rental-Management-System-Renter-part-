@extends('Renter_Pages.Renter_nav.renter_nav')
@section("renter_main")


<div class="col-md-10 col-lg-7 col-xl-12">

      <table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
     
      <th>Customer Name</th>
      <th>Service ID</th>
      <th>Rent Price</th>
      <th>Actions</th>
    </tr>
  </thead>

  <tbody>
  @foreach ($r_app as $c_user )
    <tr>
     
      <td>
      <p class="text-muted mb-0">{{$c_user->customer_name}}</p>


      </td>
      <td>
      <p class="text-muted mb-0">{{$c_user->service_id}}</p>

      </td>
      <td>
      <p class="text-muted mb-0">{{$c_user->rent_price}}</p>

      </td>
      <td>
        <a href="{{route('singleViewApproval',['id'=>$c_user->id])}}" class="btn btn-primary">Details</a>

      </td>
      @if($c_user->status != 1)
      <td>
        <form action="{{route('deleteApproval')}}" method="post">
        {{@csrf_field()}}
            <input type="hidden" value="{{$c_user->id}}" name="id">
      
      <button type="submit" class="btn btn-danger">Decline</button>
      </form>
      </td>
      <td>
        <form action="{{route('acceptApproval')}}" method="post">
        {{@csrf_field()}}
            <input type="hidden" value="{{$c_user->id}}" name="id">
      
      <button type="submit" class="btn btn-danger">Approve</button>
      </form>
      
      </td>
      @else
      <td> <p>Request accepted..Wait for the Approve</p> </td>   
      @endif
    </tr>

    @endforeach
  </tbody>
</table>
      </div>
      <div class="container my-5">

  
  <!-- Section: Block Content -->
  <section>
    
    
    
    <hr class="w-header my-4">
    
    <div class="row white-text">

      <!-- Grid column -->
      <div class="col-xl-3 col-md-6 mb-4">

        <!-- Card Primary -->
        <div class="card classic-admin-card primary-color">
          <div class="card-body py-3">
            <i class="far fa-money-bill-alt"></i>
            <p class="small">SALES</p>
            <h4>20000Tk</h4>
          </div>
          <div class="progress md-progress">
            <div class="progress-bar grey darken-3" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <div class="card-body pt-2 pb-3">
            <p class="small mb-0">Better than last week (25%)</p>
          </div>
        </div>
        <!-- Card Primary -->

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-xl-3 col-md-6 mb-4">

        <!-- Card Yellow -->
        <div class="card classic-admin-card warning-color">
          <div class="card-body py-3">
            <i class="fas fa-chart-line"></i>
            <p class="small">SUBSCRIPTIONS</p>
            <h4>200</h4>
          </div>
          <div class="progress md-progress">
            <div class="progress-bar bg grey darken-3" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <div class="card-body pt-2 pb-3">
            <p class="small mb-0">Worse than last week (25%)</p>
          </div>
        </div>
        <!-- Card Yellow -->

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-xl-3 col-md-6 mb-4">

        <!-- Card Blue -->
        <div class="card classic-admin-card light-blue lighten-1">
          <div class="card-body py-3">
            <i class="fas fa-chart-pie"></i>
            <p class="small">TRAFFIC</p>
            <h4>20000</h4>
          </div>
          <div class="progress md-progress">
            <div class="progress-bar grey darken-3" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <div class="card-body pt-2 pb-3">
            <p class="small mb-0">Better than last week (75%)</p>
          </div>
        </div>
        <!-- Card Blue -->

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-xl-3 col-md-6 mb-4">

        <!-- Card Red -->
        <div class="card classic-admin-card red accent-2">
          <div class="card-body py-3">
            <i class="fas fa-chart-bar"></i>
            <p class="small">ORGANIC TRAFFIC</p>
            <h4>2000</h4>
          </div>
          <div class="progress md-progress">
            <div class="progress-bar grey darken-3" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <div class="card-body pt-2 pb-3">
            <p class="small mb-0">Better than last week (25%)</p>
          </div>
        </div>
        <!-- Card Red -->

      </div>
      <!-- Grid column -->

    </div>

  </section>
  <!-- Section: Block Content -->
  

</div>
@endsection
