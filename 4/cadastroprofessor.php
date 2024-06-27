<?php
$mat = $_POST['mat'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$endereco = $_POST['endereco'];


$con = mysqli_connect("localhost", "root", "", "seila");

$insert = "insert into professor values($mat, '$nome', '$email', $tel, '$endereco')";

$result = mysqli_query($con, $insert);

if($result){
    echo "Cadastro realizado <br>";
    
}
else{
    echo "Erro no cadastro <br>";
    echo "<a href= 'form.html'>tente novamente </a> <br>";
}
echo "<a href='index.html'> Menu </a> <br>";
echo "<a href='form.html'> Cadastrar outro professor </a> <br>";
echo "<a href='lista.php'> Listar professores cadastrados </a> <br>";
?>