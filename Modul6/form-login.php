<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
</head>
<style>
    .hd{
        background-image: url(kom.jpeg);
        background-size: cover;
    }
    .hb{
        color: white;
        padding-top: 250px;
        padding-left: 500px;
        font-family: "Lato", sans-serif;
        font-size: 30px;
    }
    #fd{
        font-size:20px;
    }
</style>
<body class= "hd">
    <?php
    if(isset($_GET["error"])){
        if($_GET["error"] == "wrong"){
            echo '<h3>NIS atau Password salah</h3>';
        }
    }
    ?>
    <form action="login.php" method="post" class="hb">
        NIS : <input type="text" name="nis"> <br>
        Password: <input type="password" name="password"> <br>
        <input type="submit" value="LOGIN" id="fd">
    </form>
        
</body>
</html>