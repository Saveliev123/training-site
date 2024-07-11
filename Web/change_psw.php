<?php
if (isset($_POST["login"]) and isset($_POST["password"]))
{
  $link = mysqli_connect("localhost","root","","БД");
  $login = $_POST["login"];
  $userpassword = $_POST["password"];
  $result = mysqli_query($link, "UPDATE users SET login = '$login', password = '$userpassword'");
  if ($result = true)
  {        
    header("Location:Authorization.php");
  }
}
?>