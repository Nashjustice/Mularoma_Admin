@extends('layouts.main')

@section('content')

   
      <!-- /main-header -->
         <style>
            .bg-turquoise-gradient {
                background-image: linear-gradient(45deg, #56d6e1, #89e2ea) !important;
            }
            .bg-darkblue-gradient {
                background-image: linear-gradient(45deg, #8b40ea, #a266ee) !important;
            }
            .cashier-buttons > a{
                padding: .7em 1.5em;
                margin: 0 .4em;
                border-radius: 10px;
                color: white;
            }
         </style>

        <!-- container -->
        <div class="container-fluid">

        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
          <div class="left-content">
            <div>
              <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">Welcome back, {{Auth::user()->username}}</h2>
             
            </div>
          </div>
          <div class="main-dashboard-header-right">
            <!--<div>-->
            <!--  <label class="tx-13">Platform Ratings</label>-->
            <!--  <div class="main-star">-->
            <!--    <i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i class="typcn typcn-star"></i> <span>(0)</span>-->
            <!--  </div>-->
            <!--</div>-->
            
            <!--<div>-->
            <!--  <label class="tx-13">Offline Sales</label>-->
            <!--  <h5>0</h5>-->
            <!--</div>-->
          </div>
        </div>
        <!-- breadcrumb -->

          <!-- row -->
          <div class="row row-sm row-deck">
           
           @if($tokens->count() > 0)
            <div class="table-responsive country-table">
                <table class="table table-hover mb-0 text-md-nowrap">
                <thead class="thead-dark">
                     <tr>
                          <th scope="col">#</th>
                          <th scope="col">Username</th>
                          <th scope="col">Type</th>
                          <th scope="col">Capital</th>
                          <th scope="col">Total profit</th>
                          <th scope="col">Days</th>
                          <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tokens as $token)
                    <tr>
                        <th scope="row">{{$token->id}}</th>
                        <td>{{ App\User::find($token->user_id)->username }}</td>
                        <td>{{$token->name}}</td>
                        <td>{{$token->capital}}</td>
                        <td>{{$token->total_profit}}</td>
                        <td>{{$token->days}}</td>
                        <td><button class="btn btn-success" disabled>{{$token->status}}</button></td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
                </div>    
            @else
                <h3>
                    No history
                </h3>
            @endif

          </div>

        </div>
        <!-- /Container -->
      
      <!-- /main-content -->
      

@endsection