<html>
    <title>Tarefas</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.io.png" type="image/x-icon">
</html>
<?php 

    echo "<table class='table table-hover table-striped-columns'>
        <tr>
            <th>Código </th>
            <th>Tarefa</th>
        </tr>";

    if (isset($tarefa) && is_array($tarefa)) {
        while ($tarefaTemporaria = array_shift($tarefa))
        {
            echo "<tr>
                    <td>".$tarefaTemporaria->getId()."</td>
                    <td>".$tarefaTemporaria->getAtividade()."</td>
                    <td> 
                        <button class='btn btn-success' onclick=\window.location.href = '?codigo=".$tarefaTemporaria->getId()."'\">Editar</button>
                        <button onclick=\" if(confirm('Tem certeza que deseja excluir tarefa?')){location.href='excluir.php?codigo=".$tarefaTemporaria->getId()."';}else{return false;} \" class='btn btn-danger'>Excluir</button>
                    </td>
                <tr>";
        }
    }

    echo "</table>";
    echo "<p><a style='color: black;' href='tarefa.php'>cadastrar tarefas</a></p>";

?>