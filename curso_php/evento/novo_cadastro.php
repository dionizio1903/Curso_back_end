<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal_1" data-bs-whatever="@mdo">Participante</button>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal_2" data-bs-whatever="@fat">Palestra</button>


<div class="modal fade" id="exampleModal_1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Participante</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="?page=salvar" method="post">
        <input type="hidden" name="acao" value="cadastrar">

          <div class="mb-3">
            <label for="" class="col-form-label">Nome</label>
            <input type="text" class="form-control" name="nome">
          </div>
          <div class="mb-3">
            <label for="" class="col-form-label">Cpf</label>
            <input type="number" class="form-control" name="cpf">
          </div>
          <div class="mb-3">
            <label for="" class="col-form-label">E-mail</label>
            <input type="e-mail" class="form-control" name="email">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Data de nascimento</label>
            <input type="date" name="data_nasc" class="form-control">
          </div>

          <select class="form-select form-select-lg mb-3 form-control" aria-label=".form-select-lg example" name="escolaridade" aria-label="Default select example">
          <option>Escolaridade</option>
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

<div class="modal fade" id="exampleModal_2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Palestra</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
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
            <input type="number" class="form-control" name="nome">
          </div>

          <div class="mb-3">
            <label for="message-text" class="col-form-label">Observação</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
          
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Salvar</button>
      </div>
    </div>
  </div>
</div>

