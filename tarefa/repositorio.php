<?php 

require __DIR__ . '/conexao.class.php';
include 'tarefa.class.php';

interface IRepositorioTarefa {
    public function cadastrarTarefa($tarefa);
    public function removerTarefa($id);
    public function atualizarTarefa($tarefa);
    public function buscarTarefa($tarefa);
    public function getListarTarefa();
}

class RepositorioTarefa implements IRepositorioTarefa {

    private $conexao;

    public function __construct(){
        $this->conexao = new Conexao("localhost", "locadora", "alunolab", "sistema");
        if ($this->conexao->conectar() == false) {
            echo "Erro: " . mysqli_connect_errno();
        }
    }

    public function cadastrarTarefa($tarefa) {
        $atividade = $tarefa->getAtividade();
        $id = $tarefa->getAtividade();

        $sql = "INSERT INTO tarefa (id, atividade) VALUES (NULL, '$atividade')";
        return $this->conexao->executarQuery($sql);
    }

    public function removerTarefa($id) {
        $sql = "DELETE FROM tarefa WHERE id = " . $id;
        return $this->conexao->executarQuery($sql);
    }

    public function atualizarTarefa($tarefa) {
        $id = $tarefa->getId();
        $atividade = $tarefa->getAtividade();

        $sql = "UPDATE tarefa SET atividade = '" . $tarefa['atividade'] . "' WHERE id = " . $tarefa['id'];
        return $this->conexao->executarQuery($sql);
    }

    public function buscarTarefa($id) {
        $linha = "SELECT * FROM tarefa WHERE id = " . $id;
        return $this->conexao->executarQuery($linha);
    }

    public function getListarTarefa() {
        $sql = "SELECT * FROM tarefas";
        $result = $this->conexao->executarQuery($sql);

        $array = array();

        while($linha = mysqli_fetch_array($result)) {
            $tarefa = new Tarefa(
                $linha['id'],
                $linha['atividade']
            );

            array_push($array, $tarefa);
        }

        return $array;
    }
}

$repositorioTarefa = new RepositorioTarefa();

?>
