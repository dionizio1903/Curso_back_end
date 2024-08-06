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

    public function inserirPales() {
        $sql = "INSERT INTO palestra (nome,dt,horario,vaga,observacao ) VALUES ('{$_POST['nome']}','{$_POST['dt']}','{$_POST['hora']}','{$_POST['vaga']}','{$_POST['obs']}')";

        $this->conn->getConexao()->query($sql);
    }

    public function listar(){
        $sql = "SELECT participante.id_participante,participante.nome,participante.cpf,participante.email,participante.data_nasc,participante.escolaridade, palestra.nome_palestra FROM  participante   INNER JOIN  palestra  ON palestra.id_palestra = participante.id_participante ";  
        
        $result =$this->conn->getConexao()->query($sql);

        $qtd =$result->rowCount();

        if($qtd>0){
            print'<table class="table">
                <thead class="text-center">

                    <tr>
                        <th scope="col">ID</th>,
                        <th scope="col">Nome</th>,
                        <th scope="col">Cpf</th>,
                        <th scope="col">E-mail</th>,
                        <th scope="col">Data de Nascimento</th>,
                        <th scope="col">escolaridade</th>
                        <th scope="col">Palestra</th>                        
                        <th scope="col">Acões</th>                        
                    </tr>                
                </thead>'; 

                while ($row = $result->fetch(PDO::FETCH_LAZY)){
                    print"<tbody class='table-group-divider text-center'>";
                    print "<tr>";
                    print("<td>". $row->id_participante ."</td>");
                    print("<td>".$row->nome ."</td>");
                    print("<td>".$row->cpf ."</td>");
                    print("<td>".$row->email ."</td>");
                    print("<td>".$row->data_nasc ."</td>");
                    print("<td>".$row->escolaridade ."</td>");
                    print("<td>".$row->nome_palestra ."</td>");
                    print("<td>
                                        <button onclick=\"location.href='?page=editar&id=". $row->id_participante ."';\"class='btn btn-sucess me-3 bg-warning'> Editar</button>");

                                        print ("<button onclick=\"if(confirm('Deseja Excluir?')){
                                        location.href='?page=salvar&acao=excluir&id=". $row->id_participante ."'
                                        }else{false}\" class='btn btn-danger'>Excluir                                       
                                        </button>
                                    </td>");
                   
                   
                   
                    
                    print "</tr>";
                    print"</tbody>"; 
                }
            print "</table>";    
        }

        
    }

    public function atualizarParticipante(){
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $data_nasc = $_POST['data_nasc'];
        $escolaridade = $_POST['escolaridade'];

        $sql = "UPDATE participante SET 
                nome = '{$nome}',
                cpf = '{$cpf}',
                email = '{$email}',
                data_nasc = '{$data_nasc}',
                escolaridade = '{$escolaridade}'
                WHERE id_participante = ".$_REQUEST["id"];

            $this->conn->getConexao()->query($sql);        
    }

}