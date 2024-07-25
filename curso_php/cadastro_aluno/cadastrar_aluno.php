<form action="?page=salvar" method="post" class=" col-5 h-3 w-30 mx-auto p-5">

<input type="hidden" name="acao" value="cadastrar">

<div class="mb-3" col>
  <label for="">Nome</label>
  <input type="text" name="nome" class="form-control">
</div>

<div class="mb-3">
  <label for="cpf">Cpf</label>
  <input type="number format"  name="cpf" id="cpf" class="form-control">
</div>

<div class="mb-3">
  <label for="" class="form-label">Data de nascimento</label>
  <input type="date" name="data_nasc" class="form-control">
</div>
<div>

 <label class="form-label">Qual e o Sexo:</label>
</div>
<div class="form-check form-check-inline mb-3 py-3  ">
  <input class="form-check-input" type="radio" name="genero" value="masculino" >
  <label class="form-check-label">Masculino</label>
</div>
<div class="form-check form-check-inline mb-3  ">
  <input class="form-check-input" type="radio" name="genero" id="fem" value="feminino">
  <label class="form-check-label " for="fem">Feminino</label>
</div>



<select class="form-select form-select-lg mb-3 form-control" aria-label=".form-select-lg example" name="estado_civil" aria-label="Default select example">
<option selected>Estado civil</option>
<option name="estado_civil" value="solteiro">Soltero</option>
<option name="estado_civil" value="casado">Casado</option>
<option name="estado_civil" value="divorciado">Divorciado</option>
</select>



<div>
  <label>Observações</label>
  <textarea class="form-control mb-3" placeholder="Observações" id="floatingTextarea" name="obs"></textarea>

</div>

<button type="submit" class="btn btn-primary py-2 w-100">Enviar</button>

</form>



