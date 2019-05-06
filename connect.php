<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
<div class="login-box">
      <h1>Login</h1>
      <form action="" method='post'>
      
      <div class="textbox">
      <i class="fas fa-user"></i>
       <input type="text" name="name"  placeholder="pseudo">
  </div>
  <div class="textbox">
     <i class="fas fa-lock"></i>
    <input type="password"  name="pwd"  placeholder="Mot de passe">
  </div>
  <button type="submit" name="submit" >Connexion</button>




<?php
$user=array(
array( "Diop" , "Rokhaya","niakh"),
array( "Niang" ,"Mouhsinatou" ,"kya"),
array( "sonatel","academy","devweb"),
);
if(isset($_POST['submit'])){
    if(isset ($_POST['submit']) AND isset($_POST['pwd'])){
        header("location:connect.php");
    }
    if($_POST['name']!="" && $_POST['pwd']!=""){
        for($i=0; $i<=3;$i++){
if($user[$i][1]==$_POST['name'] AND $user[$i][2]==$_POST['pwd'] ){
    header("location:room.php");
        }
    }
}
}
?>
              
      </form>   
   </div>

</body>
</html>