<!DOCTYPE html>
<html lang="en">
<head>
  <title>login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<style>
body {
    background: #9CECFB;
    background: -webkit-linear-gradient(to right, #0052D4, #65C7F7, #9CECFB);
    /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #0052D4, #65C7F7, #9CECFB);
}

.row{
    padding-top: 100px;
}
.card-signin {
    border: 0;
    border-radius: 1rem;
    box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
    margin-bottom: 2rem;
    font-weight: 300;
    font-size: 1.5rem;
}

.card-signin .card-body {
    padding: 2rem;
}

.form-singup {
    width: 100%;
    font-size: 80%;
    border-radius: 5rem;
    letter-spacing: .1rem;
    font-weight: bold;
    padding: 1rem;
    transition: all 0.2s;
}

.btn {
    font-size: 80%;
    border-radius: 5rem;
    letter-spacing: .1rem;
    font-weight: bold;
    padding: 1rem;
    transition: all 0.2s;
}

.form-group {
    position: relative;
    margin-bottom: 1rem;
}

.form-group input {
    border-radius: 5rem;
  }
</style>
<body>

  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card card-signin">
            <div class="card-body">
              <h5 class="text-center">Sign Up</h5>
              @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
              @endif
              <form class="form-singup" action="{{route ('singUp')}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                  <input type="text" id="fname" class="form-control" placeholder="Enter First Name" name="fname" required
                    autofocus>
                </div>
                <div class="form-group">
                  <input type="text" id="fname" class="form-control" placeholder="Enter Last Name" name="lname" required
                    autofocus>
                </div>
                <div class="form-group">
                  <input type="email" id="email" class="form-control" placeholder="Enter Email Address" name="email"
                    required autofocus>
                </div>
                <div class="form-group">
                  <input type="password" id="password" class="form-control" placeholder="Enter Password" name="password"
                    required autofocus>
                </div>
                <button type="submit" class="btn btn-lg btn-primary btn-block text-uppercase">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  
  </body>
</html>