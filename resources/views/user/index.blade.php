@extends('layouts.main')

@section('content')

   
      <!-- /main-header -->

        <!-- container -->
        <div class="container-fluid">

        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
          <div class="left-content">
            <div>
              <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">Admin Dashboard!</h2>
             
            </div>
          </div>
          <div class="main-dashboard-header-right">
            <div>
              <label class="tx-13">Platform Ratings</label>
              <div class="main-star">
                <i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i class="typcn typcn-star"></i> <span>(0)</span>
              </div>
            </div>
            <div>
              <label class="tx-13">Online users</label>
              <h5>
                
                <?php
                $min=1;
                $max=App\User::count();
                echo rand($min,$max);
              ?>

              </h5>
            </div>
            <div>
              <label class="tx-13">Offline Sales</label>
              <h5>0</h5>
            </div>
          </div>
        </div>
        <!-- breadcrumb -->

          <!-- row -->
          <div class="row row-sm">
            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
              <div class="card overflow-hidden sales-card bg-primary-gradient">
                <div class="ps-3 pt-3 pe-3 pb-2 pt-0">
                  <div class="">
                    <h6 class="mb-3 tx-12 text-white">Activations</h6>
                  </div>
                  <div class="pb-0 mt-0">
                    <div class="d-flex">
                      <div class="">
                        <h4 class="tx-20 fw-bold mb-1 text-white">{{Auth::user()->currency}}

                          <?php
                          $expenditure=App\Activations::sum('amount');

                          echo $expenditure;
                          ?>
                         </h4>
                        
                      </div>
                    
                    </div>
                  </div>
                </div>
                <span id="compositeline" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
              <div class="card overflow-hidden sales-card bg-danger-gradient">
                <div class="ps-3 pt-3 pe-3 pb-2 pt-0">
                  <div class="">
                    <h6 class="mb-3 tx-12 text-white">Total Active Users</h6>
                  </div>
                  <div class="pb-0 mt-0">
                    <div class="d-flex">
                      <div class="">
                        <h4 class="tx-20 fw-bold mb-1 text-white">{{App\User::where('status',2)
                       
                        ->count()}}</h4>
                      
                      </div>
                      
                    </div>
                  </div>
                </div>
                  <!--<button type="button" class="btn btn-info">Withdraw</button> -->
                <!--<span id="compositeline2" class="pt-1">3,2,4,6,12,14,8,7,14,16,12,7,8,4,3,2,2,5,6,7</span>-->
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
              <div class="card overflow-hidden sales-card bg-danger-gradient">
                <div class="ps-3 pt-3 pe-3 pb-2 pt-0">
                  <div class="">
                    <h6 class="mb-3 tx-12 text-white">Inactive Users</h6>
                  </div>
                  <div class="pb-0 mt-0">
                    <div class="d-flex">
                      <div class="">
                        <h4 class="tx-20 fw-bold mb-1 text-white"> {{App\User::where('status',1)
                       
                        ->count()}}</h4>
                       
                      </div>
                      
                    </div>
                  </div>
                </div>
                  <!--<button type="button" class="btn btn-info">Withdraw</button> -->
                <span id="compositeline2" class="pt-1">3,2,4,6,12,14,8,7,14,16,12,7,8,4,3,2,2,5,6,7</span>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
              <div class="card overflow-hidden sales-card bg-success-gradient">
                <div class="ps-3 pt-3 pe-3 pb-2 pt-0">
                  <div class="">
                    <h6 class="mb-3 tx-12 text-white">Referal Earnings</h6>
                  </div>
                  <div class="pb-0 mt-0">
                    <div class="d-flex">
                      <div class="">
                        <h4 class="tx-20 fw-bold mb-1 text-white">{{App\User::where('status',2)
                       
                        ->sum('ref_bal')}}</h4>
                       
                      </div>
                      
                    </div>
                  </div>
                </div>
                  <!--<button type="button" class="btn btn-info">Withdraw balance</button> -->
                <span id="compositeline3" class="pt-1">5,10,5,20,22,12,15,18,20,15,8,12,22,5,10,12,22,15,16,10</span>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
              <div class="card overflow-hidden sales-card bg-warning-gradient">
                <div class="ps-3 pt-3 pe-3 pb-2 pt-0">
                  <div class="">
                    <h6 class="mb-3 tx-12 text-white">Total Investment Earnings</h6>
                  </div>
                  <div class="pb-0 mt-0">
                    <div class="d-flex">
                      <div class="">
                        <h4 class="tx-20 fw-bold mb-1 text-white">{{App\Investments::where('status',1)
                       
                        ->sum('earnings')}}
                         
                        </h4>
                        
                      </div>
                      <!--<span class="float-end my-auto ms-auto">-->
                      <!--  <i class="fas fa-arrow-circle-down text-white"></i>-->
                      <!--  <span class="text-white op-7"> -152.3</span>-->
                      <!--</span>-->
                    </div>
                  </div>
                 
                </div>
                 <!--<button type="button" class="btn btn-info">Withdraw</button> -->
                <span id="compositeline4" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
                
              </div>
            </div>
            
            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
              <div class="card overflow-hidden sales-card bg-warning-gradient">
                <div class="ps-3 pt-3 pe-3 pb-2 pt-0">
                  <div class="">
                    <h6 class="mb-3 tx-12 text-white">Total Withdrawals To Mpesa</h6>
                  </div>
                  <div class="pb-0 mt-0">
                    <div class="d-flex">
                      <div class="">
                        <h4 class="tx-20 fw-bold mb-1 text-white">{{App\Withdraw::where('destination','mpesa')
                       
                        ->sum('amount')}}
                         
                        </h4>
                        
                      </div>
                      <!--<span class="float-end my-auto ms-auto">-->
                      <!--  <i class="fas fa-arrow-circle-down text-white"></i>-->
                      <!--  <span class="text-white op-7"> -152.3</span>-->
                      <!--</span>-->
                    </div>
                  </div>
                 
                </div>
                 
                
              </div>
            </div>
           
          </div>
          <!-- row closed -->

         


          
          <div class="row row-sm row-deck">
           
           
           <div class="row row-sm row-deck">       
            <div class="col-md-12 col-lg-12 col-xl-12">
              <div class="card card-table-two">
                <div class="d-flex justify-content-between">
                  <h4 class="card-title mb-1"></h4>
                  <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>
                <span class="tx-12 tx-muted mb-3 ">User Investments</span>
                <div class="table-responsive country-table">
                  <table class="table table-hover mb-0 text-md-nowrap">
                    <thead>
                      <tr>
                         <th class="wd-lg-25p">Username</th>
                        <th class="wd-lg-25p">Package</th>
                        <th class="wd-lg-25p tx-right">Capital</th>
                        <th class="wd-lg-25p tx-right">Earnings</th>
                        <th class="wd-lg-25p tx-right">Running days</th>
                        <th class="wd-lg-25p tx-right">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($investments as $investment)
                      <tr>
                          
                           <td><?php
                        
                        $invs=App\User::where('id',$investment->user_id)->get();
                        
                        foreach($invs as $inv){
                            echo $inv->username;
                        
                        }
                        
                        
                        ?></td>
                        <td><?php
                        
                        $invs=App\InvPackages::where('id',$investment->package_id)->get();
                        
                        foreach($invs as $inv){
                            echo $inv->package_name;
                        
                        }
                        
                        
                        ?></td>
                        <td class="tx-right tx-medium tx-inverse"><?php  $invs=App\User::where('id',$investment->user_id)->get();
                        
                        foreach($invs as $inv){
                            echo $inv->currency;
                        
                        }
                        
                        ?> {{$investment->capital}}</td>
                        <td class="tx-right tx-medium tx-inverse"><?php  $invs=App\User::where('id',$investment->user_id)->get();
                        
                        foreach($invs as $inv){
                            echo $inv->currency;
                        
                        }
                        
                        ?>
                        
                        {{$investment->earnings}}</td>
                        <td class="tx-right tx-medium tx-inverse">{{$investment->running_days}}</td>
                        <td class="tx-right tx-medium tx-inverse">
                        @if(($investment->status)==1)
                         <button class="btn btn-warning">Running</button>

                         @elseif(($investment->status)==2)

                        <button class="btn btn-success">Complete</button>

                       

                        </td>

                        @endif
                       
                      </tr>

                      @endforeach
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          </div>
          <!-- /row -->
        </div>
        <!-- /Container -->
      
      <!-- /main-content -->
@endsection