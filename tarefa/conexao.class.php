<?php

class Conexao {
    private $host;
    private $db;
    private $user;
    private $password;
    private $conn;

    public function __construct($host, $db, $user, $password) {
        $this->host = $host;
        $this->db = $db;
        $this->user = $user;
        $this->password = $password;
    }

    public function conectar() {
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->db);

        if ($this->conn->connect_error) {
            return false;
        } else {
            return true;
        }
    }

    public function getConn() {
        return $this->conn;
    }

    public function executarQuery($sql) {
        $result = $this->conn->query($sql);
        if ($result === false) {
            echo "Erro na consulta: " . $this->conn->error;
            return false;
        } else {
            return $result;
        }
    }
}

?>
