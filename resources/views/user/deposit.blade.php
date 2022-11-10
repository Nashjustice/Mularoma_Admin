	<!-- row -->
					
	@extends('layouts.main')

  @section('content')
  <div class="container-fluid"><br>
			  	 @if (\Session::has('Success'))
                                                            <div class="alert alert-success">
                                                                <ul>
                                                                    <li>{!! \Session::get('Success') !!}</li>
                                                                </ul>
                                                            </div>
                                                        @endif
                                                        
                                                        @if (\Session::has('error'))
                                                            <div class="alert alert-error">
                                                                <ul>
                                                                    <li>{!! \Session::get('error') !!}</li>
                                                                </ul>
                                                            </div>
                                                        @endif
					<div class="row row-sm">
						<div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
							<div class="card  box-shadow-0">
								<div class="card-header">
									<h4 class="card-title mb-1">Deposit</h4>
									<p class="mb-2">This will be credited to your wallet</p>
								</div>
								<div class="card-body pt-0">
									<form class="form-horizontal" action="{{url('v1/request')}}" method="post">
										@csrf
										
										<div class="form-group">
											<input type="text" class="form-control" name="phone" value="{{Auth::user()->phone}}" readonly>
										</div>
										<div class="form-group">
											<input type="number" class="form-control" name="amount" placeholder="amount" required>
										</div>
										<input type="hidden" name="account" value="dp#{{Auth::user()->id}}">
										
										
										<div class="form-group mb-0 mt-3 justify-content-end">
											<div>
												<button type="submit" class="btn btn-primary">Deposit</button>
												
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