<?php

   
$cod = $_POST['cod']; 
$nome = $_POST['nome']; 
$email = $_POST['email'];
 

$con = mysqli_connect("localhost", "root", "", "teste");

$insert = "insert into aluno values($cod, '$email', '$nome')";

$result = mysqli_query($con, $insert);

if($result){
    echo "Dados inseridos com sucesso!!!";
    echo "<a href=formulario.html ''> Cadastrar outro aluno </a> <br/>"
    echo "<a href= 'listar.php'> Listar Alunos Cadastrados</a> <br/>"
}
else {
    echo "ocorreu um erro ao tentar cadastrar o aluno!!!"
    echo "<a href= 'formulario.html'> tentar novamente </a> <br/>"
    

?>