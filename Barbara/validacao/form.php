<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="processa.php" method = "post">
       <label for="">Nome</label> 
       <input type="text" name = "nome" id = "nome">
       <?php
        session_start();

        if (isset($_SESSION['erronome'])) {
            echo "O campo nome é obrigatório";
            unset($_SESSION['erronome']);
        }
       ?>
       <label for="">Sobrenome</label>
       <input type="text" name = "sobrenome" id = "sobrenome">
       <label for="">Idade</label>
       <input type="number" name = "idade" id = "idade" >
       <input type="submit" value = "cadastrar"> 
       
    </form>
   
</body>
</html>