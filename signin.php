<!doctype html>
<html>
<head>
    <title> </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

<div class="login-form">
<h1 class="head" >Ready for Examination ....</h1>
  <form action="registration.php" method="post">
    <h1>Sign in</h1>
    <div class="content">
      <div class="input-field">
      <input type="text" placeholder="Name" autocomplete="nope">
      <input type="number" placeholder="Phone Number" autocomplete="nope">
      <br>  
        <input type="text" name="user" placeholder="UserName *" autocomplete="nope">
        <br> 
        <input type="id" placeholder="College ID" autocomplete="new-id">
      </div>
      
      <div class="input-field">
        <input type="password" name="password" placeholder="Password *" autocomplete="new-password">
      </div>
    </div>
    <div class="action">
    <button type="submit">Signin </button>
    </div>
  </form>
</div>
</body>
</html>
