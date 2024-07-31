<?php 

$pdt = new Produto();
$conn = new Conexao();

switch ($_REQUEST['acao']) {
    case 'cadastrar':
        $pdt->inserir();

        if ($pdt==true) {
            print("<script>alert('Cadastrado com sucesso!')</script>");
            print("<script>location.href='?page=listar'</script>");
        }else{
            print ("<script>alert('Nao foi possivel cadastrar!')</script>");
        }

        break;
    
    default:
        # code...
        break;
}