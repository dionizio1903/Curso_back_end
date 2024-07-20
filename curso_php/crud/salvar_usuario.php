<?php 
include_once('db.php');
switch ($_REQUEST['acao']) {
    case "cadastrar":
        $sql ="insert into usuario(nome,email,senha,data_nasc)
        values('{$_POST['nome']}','{$_POST['email']}','{$_POST['senha']}','{$_POST['data_nasc']}'
        )";
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
        $email = $_POST["email"];    
        $senha = $_POST["senha"];    
        $data_nasc = $_POST["data_nasc"];    
        
        $sql = "UPDATE usuario SET
            nome = '{$nome}',
            email = '{$email}',
            senha = '{$senha}',
            data_nasc= '{$data_nasc}'
            WHERE id_usuario = ".$_REQUEST['id'];

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
        $sql = "DELETE FROM usuario WHERE id_usuario =" .$_REQUEST["id"];
        
        $result = $conn->query($sql);

        if($result==true){
            print("<script>alert('excluido com sucesso!')</script>");
            print("<script>location.href='?page=lista'</script>");
        }
        else{
            print("<script>alert('não foi possivel excluir!')</script>");
        }  
        break;  
};