	<!-- row -->
					
@extends('layouts.main')

  @section('content')
  <div class="container-fluid"><br>
    <!-- row -->
	<div class="row">
        @if($transactions->count() > 0)
            <div class="table-responsive country-table">
                <table class="table table-hover mb-0 text-md-nowrap">
                <thead class="thead-dark">
                     <tr>
                          <th scope="col">#</th>
                          <th scope="col">Type</th>
                          <th scope="col">Amount</th>
                          <th scope="col">Phone number</th>
                          <th scope="col">Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($transactions as $transaction)
                    <tr>
                        <th scope="row">{{$transaction->id}}</th>
                        <td>{{$transaction->type}}</td>
                        <td>{{$transaction->amount}}</td>
                        <td>{{$transaction->phone_number}}</td>
                        <td>{{$transaction->transaction_date}}</td>
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
@endsection
					