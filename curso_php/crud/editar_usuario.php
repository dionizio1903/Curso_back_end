<?php 
    $sql = "SELECT * FROM usuario WHERE id_usuario = ".$_REQUEST['id'];

    $result = $conn->query($sql);
    $row = $result->fetch_object();    

?>

 <form action="?page=salvar" method="post" class=" col-5 h-3 w-30 mx-auto p-5">

    <input type="hidden" name="acao" value="editar">

    <input type="hidden" name="id" value="<?php print $row->id_usuario ?>">

    <div class="mb-3" col>
        <label for="">Nome</label>
        <input type="text" name="nome" class="form-control" value="<?php print $row->nome ?>">
    </div>

    <div class="mb-3">
        <label for="">E-mail</label>
        <input type="email" name="email" class="form-control" value="<?php print $row->email ?>">
    </div>
    <div class="mb-3">
        <label for="">Senha</label>
        <input type="password" name="senha"class="form-control" value="<?php print $row->senha ?>">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Data de nascimento</label>
        <input type="date" name="data_nasc" class="form-control" value="<?php print $row->data_nasc ?>">
    </div>
    <button type="submit" class="btn btn-primary py-2 w-100">Enviar</button>

</form>;
