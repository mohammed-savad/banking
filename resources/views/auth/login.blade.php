<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Login</title>
</head>
<body>
<section class="vh-100" style="background-color: #edecec;">
  <div class="container py-4 h-80">
        <center><h1>ABC BANK</h1></center>
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 ">

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h3 class="mb-5">Login to your account</h3>

            <div class="form-outline mb-4">
              <label class="form-label" for="typeEmailX-2"> <strong>Email address</strong> </label>
              <input type="email" id="email" class="form-control form-control-lg" placeholder="Valied Email" name="email" :value="old('email')" required autofocus autocomplete="username"  />
            </div>

            <div class="form-outline mb-4">
              <label class="form-label" for="typePasswordX-2"> <strong>Password</strong> </label>
              <input type="password" i id="password" class="form-control form-control-lg" placeholder="Password" name="password" required autocomplete="current-password"/>
            </div>

            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-start mb-4">
              <input class="form-check-input"id="remember_me" type="checkbox" name="remember"/>
              <label class="form-check-label" for="form1Example3"><strong>Remember me</strong> </label>
            </div>

            <button class="btn btn-primary btn-lg btn-block" type="submit">Sign in</button>
        </form>
            <!-- <hr class="my-4">

            <button class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;"
              type="submit"><i class="fab fa-google me-2"></i> Sign in with google</button>
            <button class="btn btn-lg btn-block btn-primary mb-2" style="background-color: #3b5998;"
              type="submit"><i class="fab fa-facebook-f me-2"></i>Sign in with facebook</button> -->

          </div>
        </div>
      </div>
    </div><br>
        <center><strong><P>Don't have account yet? <a href="{{route('register')}}">Sign up</a></P></strong></center>
  </div>
</section>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
