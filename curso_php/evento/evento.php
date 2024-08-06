<?php 

class Evento{
    private $conn;

    public function __construct(){
        $conn = new Conexao();
        $this->conn = $conn;
    }

    public function inserirPar() {
        $sql = "INSERT INTO participante (nome,cpf,email,data_nasc,escolaridade ) VALUES ('{$_POST['nome']}','{$_POST['cpf']}','{$_POST['email']}','{$_POST['data_nasc']}','{$_POST['escolaridade']}')";

        $this->conn->getConexao()->query($sql);
    }
}