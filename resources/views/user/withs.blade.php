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
                <span class="tx-12 tx-muted mb-3 ">Withdrawals</span>
                <div class="table-responsive country-table">
                  <table class="table table-hover mb-0 text-md-nowrap">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Username</th>
                        <th>Transaction code</th>
                        <th>Type</th>
                        <th>Phone number</th>
                        <th>Amount</th>
                        <th>Date</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($withs as $with)
                      <tr>
                        <td>{{$with->id}}</td>
                        <td>{{App\User::find($with->user_id)->username}}</td>
                        <td>{{$with->receipt_number}}</td>
                        <td>{{$with->type}}</td>
                        <td>{{$with->phone_number}}</td>
                        <td>{{$with->amount}}</tdmount>
                        <td>{{$with->created_at}}</td>

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