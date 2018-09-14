<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>KoBass</title>
    <link rel="icon" href="images/logo.jpg">
    <link rel="stylesheet" type="text/css" media="screen" href="bootstrap/bootstrap.css" />
    <script src="bootstrap/bootstrap.js"></script>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    


<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <img src="images/logo.jpg" height="50px">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#!">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#!">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#!">Help</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#!">Sign In</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#!">Sign Up</a>
            </li>
          </ul>
        </div>
      </nav>

    <div class="container-fluid">
	
    <div class="row">
        <div class="col-md-3">
    </div>
    
        <div class="col-md-6 jumbotron">    
  <div class="form-group">
      <h2>Worker Details</h2>
    <label for="inputName" class="control-label">User name</label>
    <input type="text" class="form-control" id="inputName" placeholder="" required>
  </div>
  <div class="form-group">
    <label for="inputName" class="control-label">First name</label>
    <input type="text" class="form-control" id="inputName" placeholder="" required>
  </div>
  <div class="form-group">
    <label for="inputName" class="control-label">Last name</label>
    <input type="text" class="form-control" id="inputName" placeholder="" required>
  </div>
  <div class="form-group">
    <label for="inputName" class="control-label">Occupation</label>
    <select>
    <option value="volvo">Carpenter</option>
    <option value="saab">Painter</option>
    <option value="opel">Electrician</option>
    <option value="audi">Woodcutter</option>
</select>
  </div>
  <div class="form-group">
    <label for="inputName" class="control-label">Rate</label>
    <input type="text" class="form-control" id="inputName" placeholder="" required>
  </div>
  <div class="form-group">
    <label for="inputName" class="control-label">City</label>
    <select>
    <option value="volvo">Matara</option>
    <option value="saab">Colombo</option>
    <option value="opel">Galle</option>
    <option value="audi">Gampaha</option>
</select>
  </div>
 
  
  <div class="form-group">
    <label for="inputEmail" class="control-label">Email</label>
    <input type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Bruh, that email address is invalid" required>
    <div class="help-block with-errors"></div>
  </div>
  <div class="form-group">
    <label for="inputPassword" class="control-label">Password</label>
    <div class="form-inline row">
      <div class="form-group col-sm-6">
        <input type="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" required>
        <div class="help-block">Minimum of 6 characters</div>
      </div>
      <div class="form-group col-sm-6">
        <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
        <div class="help-block with-errors"></div>
      </div>
    </div>
  </div>
  
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</div>
  <div class="col-md-3"></div>

</form></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>


    
</body>
</html>