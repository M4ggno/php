<form>
    <fieldset>
    <form action="cad.php" method="post">
        <label for="email">email: </label>
        <input type="email" name="email" id="email">
        <br>
        <label for="senha">senha:</label>
        <input type="password" name="senha" id="senha">
        <br>
        <select name="Tipo" id="Tipo">

            <?php

            $conn = mysqli_connect("localhost", "root", "", "usuario");
            $select = "select * from usuario";
            $result = mysqli_query($conn, $select);
            while($linha = mysqli_fetch_array($result)) {
                echo "<option value='" . $linha['id'] . "'>" . $linha['tipousuario'] . "</option>";
            }

            ?>
        </select>
    </fieldset>
</form>
</body>
</html>