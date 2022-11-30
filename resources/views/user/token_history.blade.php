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
                      <th scope="col">Name</th>
                      <th scope="col">Capital</th>
                      <th scope="col">Percent Return</th>
                      <th scope="col">Profit expected</th>
                      <th scope="col">Status</th>
                      <th scope="col">Days</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transactions as $transaction)
                <tr>
                    <th scope="row">{{$transaction->id}}</th>
                    <td>{{$transaction->name}}</td>
                    <td>{{$transaction->capital}}</td>
                    <td>{{$transaction->rate}}</td>
                    <td>{{$transaction->return_expected}}</td>
                    <td><button class="btn btn-success" disabled>{{$transaction->status}}</button></td>
                    <td >{{$transaction->days}}</td>
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
	<!-- /row -->

</div>

  @endsection