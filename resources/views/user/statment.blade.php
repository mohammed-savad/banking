@extends('user.layout.app')
@section('title')
 Statment
@endsection
@section('content') 

<div class="container"><br><br><br>
  <h2>Account Statment</h2><br>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Date</th>
        <th>Amount</th>
        <th>Type</th>
        <th>Detailes</th>
        <th>Balance</th>
      </tr>
    </thead>
    <tbody>
        <?php
          $result=0;
          $i=0;
        ?>
        @foreach ($statment as $data)
          @if($data->user_id == Auth::user()->id)

              <?php 
              $i++;
                if($data->type == "Credit") { 
                  $result+=$data->amount;
                }
                elseif($data->type == "Debit"){
                  $result-=$data->amount;
                }
              ?>

            <tr>
                <td>{{$i}}</td>
                <td>{{ \Carbon\Carbon::parse($data->craeted_at)->format('d/m/Y')}}</td>
                <td>{{$data->amount}}</td>
                <td>{{$data->type}}</td>
                <td>{{$data->detailes}} {{$data->user->name ?? ''}}</td>
                <td>{{$result}}</td>
            </tr>
          @endif
        @endforeach 
    </tbody>
  </table>
</div>



@endsection