<?php
  session_start();
  if (isset($_SESSION["user"])) {
    header("location:beranda.php");
  }
  include("function.php");
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head><title>LOGIN</title></head>
   <style>
   .kl {
       background-image: url(new.jpg);
       background-size: cover;
   }
   .id{
  margin-left: 700px;
  margin-top: 300px;
  font-size: 50px;    
}
   </style>
   <body class= "kl">
     <?php
        if (isset($_GET["error"])) {
          if ($_GET["error"] == "wrong") {
            echo "<h1>Username dan Password salah !</h1>";
          }
        }

        if (isset($_GET["notif"])) {
          if ($_GET["notif"] == "logout") {
            echo "<h1>Berhasil Logout! </h1>";
          }
        }

        if (isset($_POST['submit'])) {
          echo do_login($_POST['username'], $_POST['password']);
        }
      ?>
      <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class= "id">
        Username: <input type="text" name="username" id= "ib"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" name="submit" class="ij" value="SIGN IN">
      </form>
   </body>
 </html>
 