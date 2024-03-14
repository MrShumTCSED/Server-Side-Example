<html>
  <head>
    <title>Server Side Example</title>
    <style>
      body{
        background-color: lightgoldenrodyellow;
      }
    </style>
  </head>
  <body>
    
    <h1>Please login</h1>
  <form id="poorSecurity">
    <p>Username: <input type="text" name="username" id="formUser"></p>
    <p>Password <input type="password" name="password" id="formPw"></p>
    <input type="button" value="Login" onclick="login()">
  </form>

    <script>
      function login(){
        var usr = document.getElementById("formUser").value;
        var pass = document.getElementById("formPw").value;

        if(usr == "shum" && pass === "iL0v3CATs!"){
          window.location.href = "secure.php";
        }else{
          alert("Incorrect username and password");
        }
      }
      
    </script>
    
  </body>
</html>