<?php



$email = $_POST['email'];
$senha = $_POST['senha'];
$tipo= $_POST['tipo'];

$conn = mysqli_connect("localhost", "root", "", "usuario");
$select = "select * from usuers u where u.email=". $email ." and u.senha=". $senha ." and u.tipo=" . $tipo ."";
$result = mysqli_query($conn, $select);
if($result -> num_rows == 0) {
    header("location:erro.html");

}
else {
    if($pessoa == 1) {
        header("location:index.html");
    }
    else {
        header("location:artista.html");
    }
}


?>