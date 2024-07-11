<?php
if (isset($_POST["text"]) and isset($_POST["id"]))
{
  $link = mysqli_connect("localhost","root","","БД");
  $text = $_POST["text"];
  $userid = $_POST["id"];
  $result = mysqli_query($link, "UPDATE Новости SET Новости = '$text' WHERE id = $userid");
  if ($result = true)
  {        
    header("Location:news_admin.php");
  }
}
?>