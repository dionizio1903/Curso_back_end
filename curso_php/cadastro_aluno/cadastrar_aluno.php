// cadastrar //

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
     <input type="number" name="cpf" class="form-control">
   </div>
   <div class="mb-3">
     <label for="" class="form-label">Data de nascimento</label>
     <input type="date" name="data_nasc" class="form-control">
   </div>

   <div class="form-check form-check-inline mb-3 py-3  ">
     <input class="form-check-input" type="radio" name="genero"  value="masculino">
     <label class="form-check-label" for="inlineRadio1">Masculino</label>
   </div>
   <div class="form-check form-check-inline mb-3  ">
     <input class="form-check-input" type="radio" name="genero"  value="feminino">
     <label class="form-check-label " for="inlineRadio2">Feminino</label>
   </div>

   <div class="dropdown mb-3 ">
   
     <button class="btn btn-primary dropdown- bg-dark mb-3 py-2 w-100" type="button" data-toggle="dropdown" name="estado_civil">Estado Civil</button>
     <ul class="dropdown-menu py-2 w-100 text-center">
       <li><a class=" text-white bg-dark mb-3 py-2 w-100" href="#" data-bs-toggle="dropdown"  >Solteiro</a></li>
       <li><a class=" text-white bg-dark mb-3 py-2 w-100" href="#">Casado</a></li>
       <li><a class=" text-white bg-dark mb-3 py-2 w-100" href="#">Divorciado</a></li>
       <li><a class=" text-white bg-dark mb-3 py-2 w-100" href="#">União Estavel</a></li>
     </ul>
   </div>


   <div>
     <label>Observações</label>
     <textarea class="form-control mb-3" placeholder="Observações" id="floatingTextarea" name="obs"></textarea>

   </div>

   <button type="submit" class="btn btn-primary py-2 w-100">Enviar</button>

 </form>