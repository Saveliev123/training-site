<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<title>Новости</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
  <div id="wrapper">
    <div id="header">
      <h2><font color=#76b900>Видеокарты NVIDIA®</font></h2>
    </div>
    <div id="header2">
      <?php include('header.php') ?>
    </div>
    <div id="content">
      <h2>Новости</h2>
      <?php $link = mysqli_connect("localhost","root","","БД");
      $query = 'SELECT * FROM Новости ORDER BY id DESC';
      $result = mysqli_query($link, $query);
      while ($data = mysqli_fetch_assoc($result)){
      ?>
        <h5><?php echo $data['Название новости']?></h5>
        <div id= "news"> <?php echo $data['Новости'];?></div>
      <?php
      }
      ?>
    </div>
    <div class="clear"></div>
    <div id="footer">
      <?php include('footer.php') ?>
    </div>
  </div>
</body>
</html>