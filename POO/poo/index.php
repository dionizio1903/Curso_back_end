<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>cadastro de produtos</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNav">
    <div>
    <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?page=novo">Cadastrar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?page=listar">Lista de Produtos</a>
        </li>        
      </ul>
    </div>  
    
    <div>     
      <input class="" type="search" name="pesquisar" placeholder="Search" aria-label="Search">
      <button  class="btn btn-outline-success" type="submit">Search</button>
    </div>
  
    </div>
  </div>
</nav> 

    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php 
                    include('conexao.php');
                    include('produto.php');

                    $pdt = new Produto();
                
                    match (@$_REQUEST['page']) {
                        'novo' => include('novo-produto.php'),
                         'editar'=>include('editar-produto.php') ,
                         'salvar'=>include('salvar-produto.php') ,
                         'listar'=> $pdt->listar(),
                         default => print('Bem vindo!')
                    }
                
                ?>
            </div>
        </div>

    </div>



</body>
</html>