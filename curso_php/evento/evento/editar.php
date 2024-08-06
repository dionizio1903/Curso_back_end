<?php
  $sql = "SELECT * FROM participante WHERE id_participante = " . $_REQUEST['id'];
     
  $conn = new Conexao();

  $result = $conn->getConexao()->query($sql);

  $row = $result->fetch(PDO::FETCH_LAZY);

?>




<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal_1" data-bs-whatever="@mdo">Participante</button>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal_2" data-bs-whatever="@fat">Palestra</button>


<div class="modal fade" id="exampleModal_1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Participante</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
<!--formaulario participante-->

      <div class="modal-body">
        
      <form action="?page=salvar" method="post">
       
      <input type="hidden" name="acao" value="ediparticipante">

      <input type="hidden" name="id" value="<?=  $row->id_participante?>">

          <div class="mb-3">
            <label for="" class="col-form-label">Nome</label>
            <input type="text" class="form-control" name="nome" value="<?= $row->nome?>">
          </div>
          <div class="mb-3">
            <label for="" class="col-form-label">Cpf</label>
            <input type="number" class="form-control" name="cpf" value="<?= $row->cpf?>">
          </div>
          <div class="mb-3">
            <label for="" class="col-form-label">E-mail</label>
            <input type="e-mail" class="form-control" name="email" value="<?= $row->email?>">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Data de nascimento</label>
            <input type="date" name="data_nasc" class="form-control" value="<?= $row->data_nasc?>">
          </div>

          <select class="form-select form-select-lg mb-3 form-control" aria-label=".form-select-lg example" name="escolaridade" aria-label="Default select example">
          <option>"<?= $row->escolaridade?>"</option>
          <option>Superior completo</option>
          <option>Superior incompleto</option>
          <option>Ensino medio completo</option>
          <option>Ensino medio incompleto</option>
          <option>Outros</option>
          </select>
          
     
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!--formulario Palestra-->

<div class="modal fade" id="exampleModal_2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Palestra</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="?page=salvar" method="post">
        
        <input type="hidden" name="acao" value="cadPalestra">
          <div class="mb-3">
            <label for="" class="col-form-label">Nome</label>
            <input type="text" class="form-control" name="nome">
          </div>
          
          <div class="mb-3">
            <label for="" class="form-label">Data</label>
            <input type="date" name="dt" class="form-control">
          </div>

          <div class="mb-3">
            <label for="appt class="form-label">hora</label>
            <input type="time" id="appt" name="hora" class="form-control">
          </div>

          <div class="mb-3">
            <label for="" class="col-form-label">Vagas</label>
            <input type="number" class="form-control" name="vaga">
          </div>

          <div class="mb-3">
            <label for="message-text" class="col-form-label">Observação</label>
            <textarea class="form-control" id="message-text" name="obs"></textarea>
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
          
        </form>
      </div>
      
    </div>
  </div>
</div>