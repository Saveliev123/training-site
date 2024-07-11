<?php
if (isset($_POST["text"]) and isset($_POST["zagol"])) 
{
  $link = mysqli_connect("localhost","root","","БД");
  $text = $_POST["text"];
  $zagol = $_POST["zagol"];
  $result1 = mysqli_query($link, "INSERT INTO Новости VALUES (default, '$text', '$zagol')");
  
  if ($result1 = true)
  {
    header('Location:news_admin.php');
  }		
}
?>