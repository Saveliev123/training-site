<?php
if(isset($_POST["delete"]))
{
  $link = mysqli_connect("localhost","root","","БД");
  $userid = $_POST["delete"];
  $result = mysqli_query($link, "DELETE FROM Новости WHERE id = $userid");
  if($result = true)
  {       
    header("Location:news_admin.php");
  }
}
?>