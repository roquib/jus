<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" href="https://bootswatch.com/4/lumen/bootstrap.min.css" />
  <link rel="stylesheet" href="main.css" />
  <script src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <title>Login & Register</title>
</head>

<body>
  <div class="container mt-5 pt-5">
    <div class="card mx-auto border-0 bg-dark">
      <div class="card-header border-bottom-0 bg-transparent">
        <ul class="nav nav-tabs justify-content-center pt-4" id="pills-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active text-success" id="pills-login-tab" data-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="true">Login</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-success" id="pills-register-tab" data-toggle="pill" href="#pills-register" role="tab" aria-controls="pills-register" aria-selected="false">Register</a>
          </li>
        </ul>
      </div>

      <div class="card-body pb-4 bg-dark">
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab">
            <form method="POST" action="/server.php">
              <div class="form-group">
                <input type="email" name="email" class="form-control" id="email" placeholder="Email" required autofocus />
              </div>

              <div class="form-group">
                <input type="password" name="password" class="form-control" id="password" id="password" placeholder="Password" required />
              </div>

              <div class="custom-control custom-checkbox">
                <input class="custom-control-input" id="customCheck1" checked="" type="checkbox" />
                <label class="custom-control-label" for="customCheck1">Check me out</label>
              </div>

              <div class="text-center pt-4">
                <button type="submit" name="login" class="btn btn-primary">Login</button>
              </div>
              <div class="text-center pt-2">
                <a class="btn btn-link text-primary" href="#">Forgot Your Password?</a>
              </div>
            </form>
          </div>

          <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="pills-register-tab">
            <form>
              <div class="form-group">
                <input type="text" name="username" id="name" class="form-control" placeholder="Username" required autofocus />
              </div>

              <div class="form-group">
                <input type="email" name="email" id="email" class="form-control" placeholder="Email" required />
              </div>

              <div class="form-group">
                <input type="password" name="password" id="password" class="form-control" placeholder="Set a password" required />
              </div>

              <div class="form-group">
                <input type="password" name="password_confirmation" id="password-confirm" class="form-control" placeholder="Confirm password" required />
              </div>

              <div class="text-center pt-2 pb-1">
                <button type="submit" class="btn btn-primary">
                  Register
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>