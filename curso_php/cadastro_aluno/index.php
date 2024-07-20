<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link defer  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">

    <title>Cadastro aluno</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?page">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?page=novo">Cadastrar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?page=lista">Lista de aluno</a>
        </li>        
      </ul>
    </div>
  </div>
</nav>

<div class="container">
        <div class="row">
          <div class="col">
            <?php 
            include("db.php");

            match (@$_REQUEST ['page']) {
              'novo' => include ('cadastrar_aluno.php'),
               'lista'=> include('listar_aluno.php'),
               'editar'=> include('editar_aluno.php'),
               'salvar'=> include('salvar_aluno.php'),
               default => print "Bem vindo!"
            }
            
            ?>
          </div>
        </div>
      </div>
</body>
</html>