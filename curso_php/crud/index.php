<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link defer  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    <title>Cadastro de Usuarios</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              <a class="nav-link" href="?page=novo">Novo Usuario</a>
              <a class="nav-link" href="?page=listar">Listar Usuario</a>
             
            </div>
          </div>
        </div>
      </nav>

      <div class="container">
        <div class="row">
          <div class="col">
            <?php 
            include("db.php");

            match (@$_REQUEST ['page']) {
              'novo' => include ('novo_usuario.php'),
               'lista'=> include('listar_usuario.php'),
               'editar'=> include('editar_usuario.php'),
               'salvar'=> include('salvar_usuario.php'),
               default => print "Bem vindo!"
            }
            
            ?>
          </div>
        </div>
      </div>
</body>
</html>