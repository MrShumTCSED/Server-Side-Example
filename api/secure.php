<?php
//This is server side code, you cannot view this in the HTML source code

$checkLogin = false;
if (isset($_POST["username"]) && isset($_POST['password'])) {
  $user = $_POST['username'];
  $pass = $_POST['password'];

  if($user != "" && $pass != ""){
    $checkLogin = true;
    //Check Username and password
    
    if($user == "shum" && $pass == "C4tsRtheBeST!"){
      setcookie('logged_in', 'yes', time() + (86400 * 30), "/"); // 86400 = 1 day
      header('Location: cats.php');
      die();
    }else{
      $validUser = false;
    }
  }
}
?>

<html>
  <head>
    <title>Secure</title>
    <style>
      body{
        background-color: lightblue;
      }
    </style>
  </head>
  <body>
    <h1>This is more secure</h1>
    <p>Log in to access the <a href="cats.php">cats page</a>.</p>
  <?php
    if($checkLogin == true){
      if($validUser == true){
        
      }else{
        echo '<h3 style="color:red">Incorrect username/password</h3>';
      }
    }
  ?>
      <form action="secure.php" method="post">
        <p>Username: <input type="text" name="username" id="formUser"></p>
        <p>Password <input type="password" name="password" id="formPw"></p>
        <input type="submit" value="Login">
      </form>
  </body>
</html>