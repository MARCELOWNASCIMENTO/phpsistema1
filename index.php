<?php
  include_once 'dbsrv.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<title> SISTEMA </title>
</head>
<body>

<hr>

<div class="dropdown">
  <button class="dropbtn">Home</button>
  <div class="dropdown-content">
    <a href="index.php">Home</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Equipamentos</button>
  <div class="dropdown-content">
    <a href="inclusaoEquipamento.php">Inclusao</a>
    <a href="consultaEquipamento.php">Consulta</a>
  </div>

</div>
<div class="dropdown">
  <button class="dropbtn">Servicos</button>
  <div class="dropdown-content">
    <a href="#">Inclusao</a>
    <a href="#">Consulta</a>
  </div>

</div>
<hr>


</body>
</html>