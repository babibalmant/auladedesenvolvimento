
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" id="form">
        <label for="">Nome</label>
        <input type="text" id="inputnome" name="inputnome">
        <div id="saidadoinputnome"></div>
        <label for="">Email</label>
        <input type="email" id="inputemail" name="inputemail">
        <div id="saidadoinputemail"></div>
        <label for="">Telefone</label>
        <input type="number" id="inputtelefone" name="inputtelefone">
        <div id="saidadoinputtelefone"></div>
        <input type="submit" value="cadastrar" onclick="mostrarvalor()">
    </form>
    <?php> 
$nome=$_GET["txtNome"];
print_r $nome
?>

</body>
</html>



<script>

 


     function mostrarvalor(){
    var entradaNome = document.querySelector(inputnome).value;
    var entradaEmail = document.getElementById(inputemail);
    var entradaTelefone = document.getElementById(inputtelefone);
    var outputnome = document.getElementById(saidadoinputnome);
    var outputemail = document.getElementById(saidadoinputemail);
    var outputtelefone = document.getElementById(saidadoinputtelefone);


 
    alert(document.getElementById(inputnome).value);
    document.getElementById(saidadoinputnome).innerHTML=5+6;
       
        console.log(entradaNome);
    }

</script>