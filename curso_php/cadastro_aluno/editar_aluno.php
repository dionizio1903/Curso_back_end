<?php
    include_once('db.php');

    $sql = "SELECT * FROM aluno WHERE id_aluno = " .$_REQUEST['id'];

    $result = $conn->query($sql);
    $row = $result->fetch_object();    

?>

<form action="?page=salvar" method="post" class=" col-5 h-3 w-30 mx-auto p-5">

   <input type="hidden" name="acao" value="editar">

   <input type="hidden" name="id" value="<?php print $row->id_aluno ?>">

   <div class="mb-3" col>
     <label for="">Nome</label>
     <input type="text" name="nome" class="form-control" value="<?php print $row->nome ?>">
   </div>

   <div class="mb-3">
     <label for="">Cpf</label>
     <input type="number" name="cpf" class="form-control" value="<?php print $row->cpf ?>">
   </div>
   <div class="mb-3">
     <label for="" class="form-label">Data de nascimento</label>
     <input type="date" name="data_nasc" class="form-control" value="<?php print $row->data_nasc ?>">
   </div>

   <div class="form-check form-check-inline mb-3 py-3  ">
     <input class="form-check-input" type="radio" name="genero"  value="masculino <?php print $row->sexo ?>">
     <label class="form-check-label" for="inlineRadio1">Masculino</label>
   </div>
   <div class="form-check form-check-inline mb-3  ">
     <input class="form-check-input" type="radio" name="genero"  value="feminino <?php print $row->sexo ?>">
     <label class="form-check-label " for="inlineRadio2">Feminino</label>
   </div>

   
   
  <select class="form-select form-select-lg mb-3 form-control" aria-label=".form-select-lg example" name="estado_civil" value="<?php print $row->estado_civil ?>" aria-label="Default select example">
  <option selected>Estado civil</option>
  <option name="estado_civil" value="solteiro">Soltero</option>
  <option name="estado_civil" value="casado">Casado</option>
  <option name="estado_civil" value="divorciado">Divorciado</option>
  </select>



   <div>
     <label>Observações</label>
     <textarea class="form-control mb-3" placeholder="Observações" id="floatingTextarea" name="obs" value="<?php print $row->obs ?>"></textarea>

   </div>

   <button type="submit" class="btn btn-primary py-2 w-100">Enviar</button>

 </form>
