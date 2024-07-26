<?php
include_once("db.php");

switch ($_REQUEST['acao']) {
   
    case "cadastrar":
        $sql = "INSERT INTO aluno (nome,cpf,data_nasc,sexo,estado_civil,observacao)
        values('{$_POST['nome']}', '{$_POST['cpf']}','{$_POST['data_nasc']}','{$_POST['genero']}','{$_POST['estado_civil']}','{$_POST['obs']}')";

        $result = $conn->query($sql);

        if($result==true){
            print("<script>alert('cadastrado com sucesso!')</script>");
            print("<script>location.href='?page=lista'</script>");
        }
        else{
            print("<script>alert('não foi possivel cadastrado!')</script>");
        }       
        break;

        case "editar":
            $nome = $_POST["nome"];    
            $cpf = $_POST["cpf"];    
            $data_nasc = $_POST["data_nasc"];    
            $sexo = $_POST["genero"];
            $estado_civil = $_POST["estado_civil"];
            $observacao = $_POST["obs"];

            $sql = "UPDATE aluno SET
                nome = '{$nome}',
                cpf = '{$cpf}',
                data_nasc= '{$data_nasc}',
                sexo = '{$sexo}',
                estado_civil = '{$estado_civil}',
                observacao = '{$observacao}'
                WHERE id_aluno = ".$_REQUEST['id'];
    
    $result = $conn->query($sql);

    if($result==true){
        print("<script>alert('Editado com sucesso!')</script>");
        print("<script>location.href='?page=lista'</script>");
    }
    else{
        print("<script>alert('não foi possivel editar!')</script>");
    }
    break;

    case "excluir":
        $sql = "DELETE FROM aluno WHERE id_aluno =" .$_REQUEST["id"];
        
        $result = $conn->query($sql);

        if($result==true){
            print("<script>alert('excluido com sucesso!')</script>");
            print("<script>location.href='?page=lista'</script>");
        }
        else{
            print("<script>alert('não foi possivel excluir!')</script>");
        }  
        break;  
    
    case "pesquisar":
        $sql = "SELECT nome FROM aluno WHERE nome = " .$_REQUEST['nome'];

    $result = $conn->query($sql);
    $row = $result->fetch_object(); 
        


    default:
        # code...
        break;
}

