<!doctype html>
<html>
<head>
    <title> </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    
<div class="login-form">
<h1 class="head">Ready for Examination ....</h1>
  <form action="validation.php" method="post">
    <h1>Login</h1>
    <div class="content">
      <div class="input-field">
      <label> User Name </label>
        <input type="text" name="user" placeholder="UserName" autocomplete="nope">
      </div>
      <div class="input-field">
      <label> Password </label>
        <input type="password" name="password" placeholder="Password" autocomplete="new-password">
      </div>
      <a href="#" class="link">Forgot Your Password?</a>
    </div>
    <div class="action">
      <button>Register</button>
      <button  href="signin.php">Sign in</button>
    </div>
  </form>
</div>
</body>
</html>

