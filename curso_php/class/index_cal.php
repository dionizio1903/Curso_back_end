
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular a area do retangulo</title>
</head>
<body>
<form action="Retangulo()" method="post" >
  <div class="row mb-3">
    <label for=""  class="col-sm-2 col-form-label">Digite a altura</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="altura" id="">
    </div>
  </div>
  <div class="row mb-3">
    <label for="" class="col-sm-2 col-form-label">Digite a largura</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="largura" id="">
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary" value="Retangulo()">Sign in</button>
  <h1><?php print $result ?></h1>
</form>
</div>

</body>
</html>