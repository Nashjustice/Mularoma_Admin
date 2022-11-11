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
          <div class="row row-sm">
            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
              <div class="card overflow-hidden sales-card bg-primary-gradient">
                <div class="ps-3 pt-3 pe-3 pb-2 pt-0">
                  <div class="">
                    <h6 class="mb-3 tx-12 text-white">Active users</h6>
                  </div>
                  <div class="pb-0 mt-0">
                    <div class="d-flex">
                      <div class="">
                        <h4 class="tx-20 fw-bold mb-1 text-white">{{number_format(3000)}}</h4>
                      </div>
                    
                    </div>
                  </div>
                </div>
                <!--<span id="compositeline" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>-->
              </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
              <div class="card overflow-hidden sales-card bg-danger-gradient">
                <div class="ps-3 pt-3 pe-3 pb-2 pt-0">
                  <div class="">
                    <h6 class="mb-3 tx-12 text-white">Dormant users</h6>
                  </div>
                  <div class="pb-0 mt-0">
                    <div class="d-flex">
                      <div class="">
                        <h4 class="tx-20 fw-bold mb-1 text-white">{{number_format(2000)}}</h4>
                      </div>
                      
                    </div>
                  </div>
                </div>
                  <!--<button type="button" class="btn btn-info">Withdraw</button> -->
                <!--<span id="compositeline2" class="pt-1">3,2,4,6,12,14,8,7,14,16,12,7,8,4,3,2,2,5,6,7</span>-->
              </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
              <div class="card overflow-hidden sales-card bg-turquoise-gradient">
                <div class="ps-3 pt-3 pe-3 pb-2 pt-0">
                  <div class="">
                    <h6 class="mb-3 tx-12 text-white">Deposits / day</h6>
                  </div>
                  <div class="pb-0 mt-0">
                    <div class="d-flex">
                      <div class="">
                        <h4 class="tx-20 fw-bold mb-1 text-white">Ksh {{number_format(12000)}}</h4>
                       
                      </div>
                      
                    </div>
                  </div>
                </div>
                  <!--<button type="button" class="btn btn-info">Withdraw</button> -->
                <!--<span id="compositeline2" class="pt-1">3,2,4,6,12,14,8,7,14,16,12,7,8,4,3,2,2,5,6,7</span>-->
              </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
              <div class="card overflow-hidden sales-card bg-success-gradient">
                <div class="ps-3 pt-3 pe-3 pb-2 pt-0">
                  <div class="">
                    <h6 class="mb-3 tx-12 text-white">Withdrawals / day</h6>
                  </div>
                  <div class="pb-0 mt-0">
                    <div class="d-flex">
                      <div class="">
                        <h4 class="tx-20 fw-bold mb-1 text-white">Ksh {{number_format(5000)}}</h4>
                       
                      </div>
                      
                    </div>
                  </div>
                </div>
                  <!--<button type="button" class="btn btn-info">Withdraw balance</button> -->
                <!--<span id="compositeline3" class="pt-1">5,10,5,20,22,12,15,18,20,15,8,12,22,5,10,12,22,15,16,10</span>-->
              </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
              <div class="card overflow-hidden sales-card bg-warning-gradient">
                <div class="ps-3 pt-3 pe-3 pb-2 pt-0">
                  <div class="">
                    <h6 class="mb-3 tx-12 text-white">Profit / day</h6>
                  </div>
                  <div class="pb-0 mt-0">
                    <div class="d-flex">
                      <div class="">
                        <h4 class="tx-20 fw-bold mb-1 text-white">Ksh {{number_format(2000)}}</h4>
                        
                      </div>
                      <!--<span class="float-end my-auto ms-auto">-->
                      <!--  <i class="fas fa-arrow-circle-down text-white"></i>-->
                      <!--  <span class="text-white op-7"> -152.3</span>-->
                      <!--</span>-->
                    </div>
                  </div>
                 
                </div>
                 <!--<button type="button" class="btn btn-info">Withdraw</button> -->
                <!--<span id="compositeline4" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>-->
                
              </div>
            </div>
            
            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
              <div class="card overflow-hidden sales-card bg-darkblue-gradient">
                <div class="ps-3 pt-3 pe-3 pb-2 pt-0">
                  <div class="">
                    <h6 class="mb-3 tx-12 text-white">Users online</h6>
                  </div>
                  <div class="pb-0 mt-0">
                    <div class="d-flex">
                      <div class="">
                        <h4 class="tx-20 fw-bold mb-1 text-white">{{number_format(10)}}</h4>
                        
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

          <!-- row with graphs -->
          <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">Weekly analysis</h2>
          <div class="row mt-3">
              <div class="col-md-6">
                 <canvas id="newUsers"></canvas>
              </div>
              <div class="col-md-6">
                 <canvas id="deposits"></canvas>
              </div>
          </div>
          <div class="row mt-3">
              <div class="col-md-6">
                 <canvas id="withdrawals"></canvas>
              </div>
              <div class="col-md-6">
                 <canvas id="profits"></canvas>
              </div>
          </div>
          
          <!-- /row -->
        </div>
        <!-- /Container -->
      
      <!-- /main-content -->
      

@endsection