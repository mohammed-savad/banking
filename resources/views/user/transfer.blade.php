@extends('user.layout.app')
@section('title')
 Transfer
@endsection
@section('content') 

<section class="vh-100" style="background-color: #edecec;"><br><br><br>
  <div class="container py-4 h-80">
        <center><h1>ABC BANK</h1></center>
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 ">

                <form method="POST" action="{{ route('store_tranfer') }}">
                    @csrf
                    <h3 class="mb-5">Transfer Money</h3>

                    <div class="form-outline mb-4">
                    <label class="form-label" for="typeEmailX-2"> <strong>Email Address</strong> </label>
                    <select class="form-control form-control-lg" id="transfer_id"  name='transfer_id' required>
                        <option disabled selected>Select transfer user</option>
                        @foreach ($user as $data)
                          @if($data->id != Auth::user()->id)
                            <option value="{{$data->id}}">{{$data->email}}</option>
                          @endif
                        @endforeach
                    </select>
                    </div>

                    <div class="form-outline mb-4">
                    <label class="form-label" for="typeEmailX-2"> <strong>Amount</strong> </label>
                    <input type="number" id="amount" class="form-control form-control-lg" placeholder="Amount" name="amount" :value="old('amount')" required  />
                    </div>

                    <input type="hidden" id="deposit" class="form-control form-control-lg"  name="user_id"  value="{{ Auth::user()->id}}" />
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Transfer</button>
                </form>
          </div>
        </div>
      </div>
    </div><br>
  </div>
</section>



@endsection
