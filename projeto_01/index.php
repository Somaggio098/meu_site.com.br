<form style="border: 2px solid black; padding: 150px; width: 150px; background-color: beige; text-align: center; align-items: center; justify-content: center; margin: auto; border-radius: 30px;"action="Login.php" method="post">
    Login <br>
    <input type="text" name="usuario"> <br>
    Senha <br>
    <input type="password" name="senha" > <br><br>
    <input style="border: 2px solid; border-radius: 30px; width: 100px; padding: 9px; background-color:bisque   ;" type="submit" value="Entrar">
</form>

<?php
if (isset($_GET['msg'])) {
    echo "<p style= 'color:red'>" . htmlspecialchars($_GET['msg']) . "</p>";
} 
?>
