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
                         <th class="wd-lg-25p">User</th>
                        <th class="wd-lg-25p">Source</th>
                        <th class="wd-lg-25p tx-right">Destination</th>
                        <th class="wd-lg-25p tx-right">Amount</th>
                        <th class="wd-lg-25p tx-right">MPESA CODE</th>
                        <th class="wd-lg-25p tx-right">Created at</th>
                        <th class="wd-lg-25p tx-right">Status</th>
                        
                       
                        
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($withs as $with)
                      <tr>
                          
                         <td><?php $users=App\User::where('id',$with->user_id)->get('username');
                        
                        foreach($users as $user){
                            echo $user->username;
                        }     
                         ?></td>
                        
                        <td class="tx-right tx-medium tx-inverse">{{$with->source}}</td>
                        <td class="tx-right tx-medium tx-inverse">{{$with->destination}}</td>
                        <td class="tx-right tx-medium tx-inverse">{{$with->amount}}</td>
                        <td class="tx-right tx-medium tx-inverse">{{$with->code}}</td>
                        <td class="tx-right tx-medium tx-inverse">{{$with->created_at}}</td>
                        <td class="tx-right tx-medium tx-inverse"><button class="btn btn-success">Success</button></td>
                        
                        
                       
                       
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