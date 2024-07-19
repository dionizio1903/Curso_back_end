

<form action="?page=salvar" method="post" class=" col-5 h-3 w-30 mx-auto p-5">

    <input type="hidden" name="acao" value="cadastrar">

    <div class="mb-3" col>
        <label for="">Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>

    <div class="mb-3">
        <label for="">E-mail</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Senha</label>
        <input type="password" name="senha"class="form-control">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Data de nascimento</label>
        <input type="date" name="data_nasc" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary py-2 w-100">Enviar</button>

</form>