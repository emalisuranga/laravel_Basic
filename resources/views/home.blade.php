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
<body>

<body>
  <div class="container">
    <div class="row">
        <H1>Home Page</H1>

        <Ul class="col-12" >
          <li>First Name : {{ Auth::user()->first_name}}</li>
          <li>Last Name : {{ Auth::user()->last_name}}</li>
          <li>Email : {{ Auth::user()->email}}</li>
        </Ul>

         <a href="{{route ('singOut')}}">
                    <button class="btn btn-outline-secondary btn-lg" type="button"> Log Out</button>
                </a>
                <button class="btn btn-outline-secondary btn-lg" onclick="{{route ('singOut')}}"><i class="fab fa-google mr-2"></i> Sign Up</button>
    </div>
  </div>
</body>
</body>
</html>