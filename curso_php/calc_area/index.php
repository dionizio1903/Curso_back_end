<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
</head>
<body>

<form class="col-5 h-3 w-30 mx-auto p-5" action="calc.php"  method="post">
  <div class="row mb-3">
    <label  class="col-sm-2 col-form-label">Altura</label>
    <div class="col-sm-10">
      <input type="number" name="altura" class="form-control" >
    </div>
  </div>

  <div class="row mb-3">
    <label  class="col-sm-2 col-form-label">Largura</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="largura">
    </div>
  </div> 
  
  <button type="submit" class="btn btn-primary" value="">Calcular</button>
  

</form>
</body>
</html>