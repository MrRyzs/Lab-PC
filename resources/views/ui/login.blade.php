<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OurLab - Login</title>
    <link href="{{ asset('/css/login.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/bootstrap-5.0.2-dist/css/bootstrap.min.css') }}">
</head>
<body style="background: url('https://smkn1jakarta.sch.id/wp-content/uploads/2016/11/Picture1.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center; background-attachment: fixed; scroll-behavior: smooth ">
    <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: rgba(0, 0, 0, 0.3); min-height: 100vh">
      <div class="container">
        <div class="row gx-lg-5 align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0 text-center ">
            <h1 class="my-5 display-3 fw-bold ls-tight text-warning">
              OurLab
              <br />
              <small class="text-primary">Login</small>
            </h1>
          </div>
  
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="card">
              <div class="card-body py-5 px-md-5">
                <h2 class="fw-bold mb-5 text-center">Login</h2>
                <form method="POST" action="{{ route('login') }}">
                  @csrf
                  <!-- Email input -->
                  <div class="form-outline mb-4">
                    <input type="email" id="email" class="form-control" name="email" required autofocus />
                    <label class="form-label" for="email">Email address</label>
                  </div>
  
                  <!-- Password input -->
                  <div class="form-outline mb-4">
                    <input type="password" id="password" class="form-control" name="password" required />
                    <label class="form-label" for="password">Password</label>
                  </div>
  
                  <!-- Submit button -->
                  <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Login</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  <script src="{{ asset('/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
