<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="processa.php">
        <label> nome</label>
        <input type="text" id="nome" name="nome"><br><br>
        <div id="saidanome"></div>
        <label for="">sobrenome</label>
        <input type="text" name="sobrenome" id="sobrenome"><br><br>
        <div class="saidasobrenome"></div>
        <label for="">email</label>
        <div id="email"></div>
        
        <input type="submit">
    </form>
    
 
    
</body>
</html>

<script type='text/javascript' defer>

document.addEventListener('blur', function() {
            const nomeinput = document.getElementById('nome').value;
            const sobrenomeinput = document.getElementById('sobrenome').value;
            const saidanome = document.getElementById('saidanome')
            
        
            if(isNaN(nomeinput)){
            
               alert('inserar um nome')
            
            }
            console.log(nomeinput);
            console.log()
            console.log(saida);
        });

</script>