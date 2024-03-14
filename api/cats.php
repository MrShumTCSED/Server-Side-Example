<?php
//Check Cookies
if(!isset($_COOKIE['logged_in'])) {
  //Note, this is not secure in real life... Just using cookies as an example to show server side processing.
  $logged_in = false;
}else{
  $logged_in = true;
}
?>

<html>
<head>
  <title>Cats</title>
</head>
<body>
  <h1>Cats</h1>


  <?php
  if($logged_in == false){
    ?>
    <h2>You must be logged in to view this page</h2>
  <?php
  }else{
  ?>
    <p>
      <img src="/pictureOfCats.jpg" alt="Cats" width="800"><br>
      Photo by <a href="https://unsplash.com/@theluckyneko?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">The Lucky Neko</a> on <a href="https://unsplash.com/s/photos/cats?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>
    </p>

  <?php
  }
?>
</body>
  
</html>