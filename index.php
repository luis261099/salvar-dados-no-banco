<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke - Upload</title>
    </head>
    <body>
        <h1>Cadastrar Imagem</h1>
        <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
        <form method="POST" action="proc_cad_img.php" enctype="multipart/form-data">
            <label>Nome:</label>
            <input type="text" name="nome" placeholder="Digitar o nome"><br><br>
			
			 <label>Vaga:</label>
            <input type="text" name="vaga" placeholder="Digitar a vaga"><br><br>
			 <label>Email:</label>
            <input type="text" name="email" placeholder="Digitar a vaga"><br><br>
            
            <label>Imagem</label>
            <input type="file" name="imagem"><br><br>
            
            <input name="SendCadImg" type="submit" value="Cadastrar">
        </form>
    </body>
</html>
