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

            case 'cadPalestra':
                $eve->inserirPales();

                if ($eve==true) {
                    print("<script>alert('Cadastrado com sucesso!')</script>");
                    print("<script>location.href='?page=listar'</script>");
                }else{
                    print ("<script>alert('Nao foi possivel cadastrar!')</script>");
                }     
            
        }

