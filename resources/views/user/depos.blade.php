	<!-- row -->
					
	@extends('layouts.main')

  @section('content')
  <div class="container-fluid"><br>
			  	 <div class="row row-sm row-deck">
           
           
           <div class="row row-sm row-deck" id="printableArea">       
            <div class="col-md-12 col-lg-12 col-xl-12">
              <div class="card card-table-two">
                <div class="d-flex justify-content-between">
                  <h4 class="card-title mb-1"></h4>
                 <input type="button" class="btn btn-success" onclick="printDiv('printableArea')" value="Print" />
                </div>
                <span class="tx-12 tx-muted mb-3 ">Deposits</span>
                <div class="table-responsive country-table">
                  <table class="table table-hover mb-0 text-md-nowrap">
                    <thead>
                      <tr>
                         <th class="wd-lg-25p">Type</th>
                        <th class="wd-lg-25p">Transaction code</th>
                        <th class="wd-lg-25p tx-right">amount</th>
                        <th class="wd-lg-25p tx-right">account</th>
                        <th class="wd-lg-25p tx-right">Time</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($depos as $depo)
                      <tr>
                          
                         <td>{{$depo->TransactionType}}</td>
                        <td>{{$depo->TransID}}</td>
                        <td class="tx-right tx-medium tx-inverse">{{$depo->TransAmount}}</td>
                        <td class="tx-right tx-medium tx-inverse">{{$depo->BillRefNumber}}</td>
                        <td class="tx-right tx-medium tx-inverse">{{$user->created_at}}</td>
                        
                        
                       
                       
                      </tr>

                      @endforeach
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          </div>
</div>


					@endsection
					
					<script>
					    function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
					</script>
					<!-- row -->