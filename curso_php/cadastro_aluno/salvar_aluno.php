<?php
include_once('db.php');
switch ($_REQUEST['acao']) {
    case "cadastrar":
        $sql = "INSERT INTO aluno(nome,cpf,data_nasc,sexo,estado_civil,observacao)
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
    
    default:
        # code...
        break;
}





