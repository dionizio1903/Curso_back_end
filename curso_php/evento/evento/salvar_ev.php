<?php 

    $eve = new Evento();
    $conn = new Conexao();

    switch ($_REQUEST['acao']) {
        case 'cadparticipante':
                
        $eve->inserirPar();

            if ($eve==true) {
                print("<script>alert('Cadastrado com sucesso!')</script>");
                print("<script>location.href='?page=listar'</script>");
            }else{
                print ("<script>alert('Nao foi possivel cadastrar!')</script>");
            } 
            break;  

            case 'cadPalestra':
                $eve->inserirPales();

                if ($eve==true) {
                    print("<script>alert('Cadastrado com sucesso!')</script>");
                    print("<script>location.href='?page=listar'</script>");
                }else{
                    print ("<script>alert('Nao foi possivel cadastrar!')</script>");
                }
            
            
            case 'ediparticipante':
                $eve->atualizarParticipante();
    
                if ($eve==true) {
                    print("<script>alert('Editado com sucesso!')</script>");
                    print("<script>location.href='?page=listar'</script>");
                }else{
                    print ("<script>alert('Nao foi possivel editar!')</script>");
                }
                break;

                
        
        }

