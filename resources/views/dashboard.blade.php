@extends('user.layout.app')
@section('title')
 Dashboard
@endsection
@section('content') 


<section class="vh-100" style="background-color: #edecec;"><br><br><br>
  <div class="container">
        <center><h1>ABC BANK</h1></center><br>
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 ">

          <center><h5>Welcome  {{ Auth::user()->name }}</h5></center><br>
            <table class="table table-striped">
                <tbody>
                <tr>
                    <td>UR ID</td>
                    <td>{{ Auth::user()->email }}</td>
                </tr>
                </tbody>
            </table>
                    
          </div>
        </div>
      </div>
    </div><br>
  </div>
</section>


@endsection




