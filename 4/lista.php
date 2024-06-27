<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="sty.css">
</head>
<body>

<table id="t1">
    <tr>
        <th> matricula </th>
        <th> nome </th>
        <th> email </th>
        <th> telefone </th>
        <th>endereço</th>
    </tr>
<?php
$con = mysqli_connect("localhost", "root", "", "seila");
$sel = "select * from professor";
$result = mysqli_query($con, $sel);

while($linha = mysqli_fetch_array($result)){
    echo "<tr>";
        echo "<td>" . $linha['mat'] . "</td>";
        echo "<td>" . $linha['nome'] . "</td>";
        echo "<td>" . $linha['email'] . "</td>";
        echo "<td>" . $linha['tel'] . "</td>";
        echo "<td>" . $linha['endereco'] . "</td>";
    echo "</tr>";

}
?>
</table>
<a href='index.html'> Menu </a> <br>
<a href='form.html'> Cadastrar outro professor </a> <br>
</body>
</html>
