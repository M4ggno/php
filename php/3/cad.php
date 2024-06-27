<?php

$email = $_POST['email'];
$senha = $_POST['senha'];
$tipo= $_POST['tipo'];
$conn = mysqli_connect("localhost", "root", "", "usuario");
$insert = "insert into usuario values('$email', '$senha', '$tipo',)";
$result = mysqli_query($conn, $insert);
if($result)  {
    echo "cadastro realizado<br/>";
    echo "<br/><a href='formlog.php'> Faça Login </a>";
}
else {
    echo "Ocorreu um erro ao tentar cadastrar o usuario<br/>";
    echo "<a href='caduser.php'> Tentar novamente </a>";
}

?>