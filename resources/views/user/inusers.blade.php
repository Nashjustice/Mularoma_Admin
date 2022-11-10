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
                <span class="tx-12 tx-muted mb-3 ">InActive Users</span>
                <div class="table-responsive country-table">
                  <table class="table table-hover mb-0 text-md-nowrap">
                    <thead>
                      <tr>
                         <th class="wd-lg-25p">Username</th>
                        <th class="wd-lg-25p">email</th>
                        <th class="wd-lg-25p tx-right">phone</th>
                        <th class="wd-lg-25p tx-right">wallet</th>
                        <th class="wd-lg-25p tx-right">Referal Bonus</th>
                        <th class="wd-lg-25p tx-right">Affiliate</th>
                        <th class="wd-lg-25p tx-right">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($users as $user)
                      <tr>
                          
                         <td>{{$user->username}}</td>
                        <td>{{$user->email}}</td>
                        <td class="tx-right tx-medium tx-inverse">{{$user->phone}}</td>
                        <td class="tx-right tx-medium tx-inverse">{{$user->wallet}}</td>
                        <td class="tx-right tx-medium tx-inverse">{{$user->ref_bal}}</td>
                        <td class="tx-right tx-medium tx-inverse">{{$user->referal}}</td>
                        
                        @if($user->status==2)
                        <td class="tx-right tx-medium tx-inverse"><a href="ban/{{$user->id}}" class="btn btn-warning">Ban</a></td>
                        @else
                        <td class="tx-right tx-medium tx-inverse"><a href="unban/{{$user->id}}" class="btn btn-warning">UnBan</a></td>
                        @endif
                        
                        <td class="tx-right tx-medium tx-inverse"><a href="/activate/{{$user->id}}" class="btn btn-success">Activate</a></td>
                        
                        <td class="tx-right tx-medium tx-inverse"><a href="user/edit/{{$user->id}}" class="btn btn-success">Edit</a></td>
                        
                        <td class="tx-right tx-medium tx-inverse"><a href="user/delete/{{$user->id}}" class="btn btn-danger">Delete</a></td>
                        
                       
                       
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