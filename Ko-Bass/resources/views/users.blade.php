<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Users</title>
    <style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: right;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: orange;
}
</style>
</head>
<body>

<ul>
    <li><a href="#about">About Us</a></li>
    <li><a href="#contact">Sign In</a></li>
    <li><a href="#news">Sign Up</a></li>
    <li><a class="active" href="#home">Home</a></li>  
</ul>
<h1><center>User Register Form</center></h1>
<form action="/register" method="post"> 
    @csrf
    <label for="">User Name</label>
    <input type="text"><br>

    <label for="">First Name</label>
    <input type="text"><br>

    <label for="">Last Name</label>
    <input type="text"><br>

    <label for="">Occupation</label>
    <input type="text"><br>

    <label for="">Email Address</label>
    <input type="email"><br>

    <label for="">Password</label>
    <input type="password"><br><br><br><br>

    <input type="submit" value="Register now">


</form>

  </body>
</html>
