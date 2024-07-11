<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script defer src="https://lk.easynetshop.ru/frontend/v5/ens-e277c048.js"></script>
<link href="https://lk.easynetshop.ru/frontend/v5/ens-e277c048.css" rel="stylesheet">
<!--<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script defer src="//lk.easynetshop.ru/frontend/v5/test.js"></script>
<link href="//lk.easynetshop.ru/frontend/v5/test.css" rel="stylesheet">-->
<style> .powered {display:none; visibility: hidden;} </style>


<!--<script src="https://kit.fontawesome.com/ec705a4d25.js" crossorigin="anonymous"></script>-->

<title>Каталог</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<!--
<div class="wrapper" onclick="location.href='catalog.php'">
  <div class="icon whatsapp">
    <div class="tooltip">Корзина</div>
    <div class="fab fa-whatsapp fa-2x"></div>
  </div>
</div>
-->


<body>
  <div id="wrapper">
    <div id="header">
    <h2><font color=#76b900>Видеокарты NVIDIA®</font></h2>
    </div>
    <div id="header2">
      <?php include('header.php') ?>
    </div>
    <div id="content">
      <h2>Каталог</h2>
      <h3>Видеокарты серии RTX</h3>            
      <table class="table table-hover">
      <tbody>
      <tr>
      <td>&nbsp;<b>GeForce</b></td>
      <td>&nbsp;<b>GPU Name</b></td>
      <td>&nbsp;<b>Speed (Turbo)</b></td>
      <td>&nbsp;<b>Memory</b></td>
      <td>&nbsp;<b>PCIe</b></td>
      <td>&nbsp;<b>Bits</b></td>
      <td>&nbsp;<b>CUDA Cores</b></td>
      <td>&nbsp;<b>FP32</b></td>
      <td>&nbsp;<b>Цена</b></td>
      </tr>
      <?php
        $link = mysqli_connect("localhost","root","","БД");
        $query = 'SELECT * FROM Каталог';
        $result = mysqli_query($link, $query);
        while ($data = mysqli_fetch_assoc($result)) {
      ?>
      <tr>
        <td>&nbsp;<?php echo $data['GeForce']?></td>
        <td>&nbsp;<?php echo $data['GPU Name']?></td>
        <td>&nbsp;<?php echo $data['Speed (Turbo)']?></td>
        <td>&nbsp;<?php echo $data['Memory']?></td>
        <td>&nbsp;<?php echo $data['PCIe']?></td>
        <td>&nbsp;<?php echo $data['Bits']?></td>
        <td>&nbsp;<?php echo $data['CUDA Cores']?></td>
        <td>&nbsp;<?php echo $data['FP32']?></td>
        <td>&nbsp;<?php echo $data['Цена']?></td>
        <td><button class="btn-ens-action btn-ens-style" data-rel="e277c048332928">Купить</button></td>
        <!--<td><button class="btn-ens-action btn-ens-style" data-rel="e277c048332900">Купить</button></td>
        <!--<td><a class="btn-ens-action btn-ens-style" data-rel="4a9f99dc1655">Купить</a></td>-->
        <!--<td><a class="btn-ens-self btn-ens-style" data-name="Nibiru E58 WI-FI FPV" data-price="4660" data-desc="Радиоуправляемый дрон FPV c Wi-Fi" data-href="https://easynetshop.ru/demo.html" data-img="https://easynetshop.ru/assets/images/product_2.jpg">Купить</a></td>
        <!--<td><a class="btn-ens-action btn-ens-style" data-rel="e277c048332713">Купить</a></td>-->
      </tr>
      <?php
      }
      ?>
      </tbody>
      </table>
    </div>
    <div class="clear"></div>
    <div id="footer">
    <?php include('footer.php') ?>
    </div>

</body>
</html>