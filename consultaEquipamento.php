<?php
  include_once 'dbsrv.php';
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<title> EQUIPAMENTO - CONSULTA </title>
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
<br>
<?php
  $sql = "select * from equipamentos;";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);
  
  if ($resultCheck > 0){
    while($row = mysqli_fetch_assoc($result)){
    echo $row['tbl_equipamento_nome']."<br>";
    echo $row['tbl_equipamento_descricao']."<br>";
    echo $row['tbl_equipamento_informacoes']."<br>"."<hr>";
    }
  }
?>

</body>
</html>