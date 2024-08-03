<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-dark bg-dark ">
        <div class="container-fluid ">
            <div class="">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse" id="navbarToggleExternalContent" data-bs-theme="dark">
                    <div class="bg-dark p-4">
                        <h5 class="text-body-emphasis h4">Desenvolvendo conexões, criando inovações!</h5>
                        <span class="text-body-secondary">Onde o código encontra a criatividade!</span>
                    </div>
                </div>
            </div>
                <ul class="navbar-nav d-flex ">
                    <li class="nav-item row mb-1">
                    <a class="nav-link active" aria-current="page" href="?index.php">Home</a>
                    </li>
                    <li class="nav-item row mb-1">
                    <a class="nav-link " aria-current="page" href="?page=novo">Cadastrar</a>
                    </li>
                    <li class="nav-item row mb-1">
                    <a class="nav-link" href="?page=listar">Listar de Participantes</a>
                    </li> 
                </ul>
            <form class="d-flex " role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>
    
    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                    include('conexao.php');
                    include('evento.php');

                    $eve = new Evento();

                    match (@$_REQUEST['page']) {
                        'novo' => include('novo_cadastro.php'),
                        'salvar'=> include('salvar_ev.php'),
                        default =>print('Bem vindo!')
                    }
                
                ?>
           </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</body>

</html>