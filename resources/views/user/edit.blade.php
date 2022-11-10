	<!-- row -->
					
	@extends('layouts.main')

  @section('content')
  <div class="container-fluid"><br>
			  		@if(session()->has('error'))
					    <div class="alert alert-danger">
					        {{ session()->get('error') }}
					    </div>
					@endif
						@if(session()->has('success'))
					    <div class="alert alert-success">
					        {{ session()->get('success') }}
					    </div>
					@endif

					<div class="row row-sm">
						<div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
							<div class="card  box-shadow-0">
								<div class="card-header">
								    <?php
								    $id=request()->id;
								    
								    $user=App\User::where('id',$id)->first();
								    ?>
									<h4 class="card-title mb-1">Edit user</h4>
									<p class="mb-2"></p>
								</div>
								<div class="card-body pt-0">
									<form class="form-horizontal" action="{{url('update')}}" method="post">
										@csrf
										
										<input type="hidden" name="id" value="{{$id}}">
										<div class="form-group">
										    <label>username</label>
											<input type="text" class="form-control" name="username" value="{{$user->username}}" placeholder="username">
										</div>
										
										<div class="form-group">
										    <label>email</label>
											<input type="text" class="form-control" name="email" value="{{$user->email}}" placeholder="email">
										</div>
										
										<div class="form-group">
										    <label>phone</label>
											<input type="text" class="form-control" name="phone" value="{{$user->phone}}" placeholder="phone">
										</div>
										
										<div class="form-group">
										    <label>wallet</label>
											<input type="text" class="form-control" name="wallet" value="{{$user->wallet}}" placeholder="Wallet Balance">
										</div>
										
										<div class="form-group">
										    <label>Referal balance</label>
											<input type="text" class="form-control" name="ref_bal" value="{{$user->ref_bal}}" placeholder="Referal balance">
										</div>
										
										<div class="form-group">
										    <label>Country (to uppercase)</label>
											<input type="text" class="form-control" name="country" value="{{$user->country}}" placeholder="Country">
										</div>
										
										<div class="form-group">
										    <label>Currency (to uppercase)</label>
											<input type="text" class="form-control" name="currency" value="{{$user->currency}}" placeholder="Currency">
										</div>
										
										<div class="form-group">
										    <label>Status (1-not activated 2-Activated,3-banned)</label>
											<input type="text" class="form-control" name="status" value="{{$user->status}}" placeholder="Referal balance">
										</div>
										
									
										
										
										<div class="form-group mb-0 mt-3 justify-content-end">
											<div>
												<button type="submit" class="btn btn-primary">Submit</button>
												
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
			
</div>
					@endsection
					<!-- row -->