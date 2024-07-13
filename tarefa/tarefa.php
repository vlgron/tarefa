<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de tarefa</title>
    <link rel="stylesheet" href="styl.css">
    <link rel="shortcut icon" href="favicon.io.png" type="image/x-icon">
    <style>
        body {
            background-color: #0f49eb;
            background-image: linear-gradient(to right, #297991, #19ccc3);
        }
    </style>
</head>
<body>  
    <main>
        <h2>Digite sua tarefa</h2>
        <form action="adicionar.php" method="post">
            <?=@$oculto;?>
            <div class="mb-3">
                <label >Tarefa</label>
                <input type="text" name="tarefa" id="<?php echo isset($tarefa) ? $tarefa->getAtividade() : "" ?>" class="form-control">
            </div>
            <div class="mb-3" id="cada">
                <input type="submit" value="cadastrar" class="btn btn-primary">
            </div>
        </form>
    </main>  
        
    <p><a href="index.php">Verificar tarefas</a></p>
    
    
</body>
</html>