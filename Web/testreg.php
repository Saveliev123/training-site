<?php
  session_start();
  if (isset($_POST['login'])) 
  { 
    $login = $_POST['login']; 
    if ($login == '') 
    { 
      unset($login);
    } 
  }
  if (isset($_POST['password'])) 
  { 
    $password=$_POST['password']; 
    if ($password =='') 
    { 
      unset($password);
    } 
  }
  if (empty($login) or empty($password))
  {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
  }
  $login = stripslashes($login);
  $login = htmlspecialchars($login);
  $password = stripslashes($password);
  $password = htmlspecialchars($password);
  $login = trim($login);
  $password = trim($password);
  $link = mysqli_connect("localhost","root","","БД");
  $result = mysqli_query($link, "SELECT * FROM users WHERE login='$login'");
  $myrow = mysqli_fetch_array($result);
  if (empty($myrow['password']))
  {
    exit ("Извините, введённый вами login или пароль неверный.");
  }
  else 
  {
    if ($myrow['password']==$password) 
    {
      $_SESSION['login']=$myrow['login']; 
      $_SESSION['id']=$myrow['id'];
      header("Location:index.php");
    }
    else 
    {
      exit ("Извините, введённый вами login или пароль неверный.");
    }
  }
?>