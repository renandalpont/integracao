<?php
  $conexao = mysqli_connect("localhost", "root", "", "turismossmartscitys");

  $sql= "SELECT * from estado";

  $resultado = mysqli_query($conexao, $sql);

  while ($row = $resultado->fetch_assoc()) {
    echo $row['nm_estado']."<br>" .$row['cd_estado']."<br>";
}
?>