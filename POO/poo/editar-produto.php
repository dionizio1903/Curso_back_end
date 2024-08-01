<h1 class="text-center">editar Produto</h1>

<?php 
    $sql = "SELECT * FROM produtos WHERE id_produto = " . $_REQUEST['id'];
     
    $conn = new Conexao();

    $result = $conn->getConexao()->query($sql);

    $row = $result->fetch(PDO::FETCH_LAZY);
?>

<form class="row g-3" action="?page=salvar" method="post">
    <input type="hidden" name="acao" value="editar">

    <input type="hidden" name="id" value="<?=  $row->id_produto?>">

  <div class="col-md-6">
    <label for="input-desc" class="form-label">Descrição</label>
    <input type="text" name="descricao" class="form-control" id="input-desc" value="<?= $row->descricao?>">
  </div>
  <div class="col-md-6">
    <label for="input-tipo" class="form-label">Tipo</label>
    <input type="text" name="tipo" class="form-control" id="input-tipo" value="<?= $row->tipo?>">
  </div>
  
<div class="col-md-4">
                <label for="inputState" class="form-label" >Unidade de Medida</label>
                <select id="inputState" name="unidade_medida" class="form-select" >
                    <option  ><?= $row->unidade_medida?></option>
                    <option> und </option>
                    <option> saco </option>
                    <option> pacote </option>
                    <option> metro</option>
                    <option> kg </option>
                </select>
            </div>
  
  <div class="col-md-4">
    <label for="" class="form-label" >Quantidade</label>
    <input type="number" name="quantidade" class="form-control" value="<?= $row->quantidade?>">
  </div>

  <div class="col-md-4">
    <label for="" class="form-label">Valor</label>
    <input type="number" name="valor" class="form-control" value="<?= $row->valor?>">
  </div>

  <div class="col-md-2 ">
    <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
</form>


