 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<form action="?page=salvar" method="post" class=" col-5 h-3 w-30 mx-auto p-5">

    <input type="hidden" name="acao" value="cadastrar">

    <div class="mb-3" col>
        <label for="">Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>

    <div class="mb-3">
        <label for="">Cpf</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Data de nascimento</label>
        <input type="date" name="data_nasc" class="form-control">
    </div>
   
    <div class="form-check mb-3">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Feminino
  </label>
</div>

<div class="form-check mb-3">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Masculino 
  </label>
</div>

<div class="dropdown mb-3">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Estado Civil</button>
  <ul class="dropdown-menu">
    <li><a href="#">Solteiro</a></li>
    <li><a href="#">Casado</a></li>
    <li><a href="#">Divorciado</a></li>
    <li><a href="#">União Estavel</a></li>
  </ul>
</div>

<div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
  <label for="floatingTextarea">Comments</label>
</div>
    
    <button type="submit" class="btn btn-primary py-2 w-100">Enviar</button>

</form>

