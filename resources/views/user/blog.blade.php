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

          <div class="row row-sm row-deck">
           
           
           <div class="row row-sm row-deck">       
            <div class="col-md-12 col-lg-12 col-xl-12">
              <div class="card card-table-two">
                <div class="d-flex justify-content-between">
                  <h4 class="card-title mb-1"></h4>
                  <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>
                <span class="tx-12 tx-muted mb-3 ">User Blogs</span>
                <div class="table-responsive country-table">
                  <table class="table table-hover mb-0 text-md-nowrap">
                    <thead>
                      <tr>
                          
                        <th class="wd-lg-25p">Username</th>
                        
                        <th class="wd-lg-25p">Title</th>
                        <th class="wd-lg-25p">Status</th>
                        <th class="wd-lg-25p">Action</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($blogs as $blog)
                      <tr>

                        <td class=" tx-medium tx-inverse"><?php
                        $users=App\User::where('id',$blog->user_id)->get();
                        
                        foreach($users as $user){
                            echo $user->username;
                        }
                        ?></td>
                        <td class=" tx-medium tx-inverse">{{$blog->title}}</td>
                        <td class=" tx-medium tx-inverse">
                        @if(($blog->status)==0)
                         <button class="btn btn-warning">Pending Approval</button>

                         @elseif(($blog->status)==1)

                        <button class="btn btn-success">Approved</button>

                        @endif
                        </td>
                        <td class=" tx-medium tx-inverse">
                        
                        @if(($blog->status)==0)
                         <a href="/approve/{{$blog->id}}" class="btn btn-warning">Approve</a>
                        @endif
                        </td>
                       
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
					@endsection
					<!-- row -->