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

        case 'editar':
            $pdt->atualizar();

            if ($pdt==true) {
                print("<script>alert('Editado com sucesso!')</script>");
                print("<script>location.href='?page=listar'</script>");
            }else{
                print ("<script>alert('Nao foi possivel editar!')</script>");
            }
            break;
        
        case 'excluir':
            $pdt->excluir();
            
            if ($pdt==true) {
                print("<script>alert('Excluir com sucesso!')</script>");
                print("<script>location.href='?page=listar'</script>");
            }else{
                print ("<script>alert('Nao foi possivel excluir!')</script>");
            }
            break;
            
            break;    
        break;
    
    default:
        # code...
        break;
}