<?php

$sql ="SELECT * FROM aluno";

$result = mysqli_query($conn, $sql);

$quant = $result->num_rows;

if ($quant > 0) {
  print "<table class='table table-hover table-striped table-bordered'>";

  print ("<tr class='text-center'>");
  print("<th> ID </th>");
  print("<th> Nome </th>");
  print("<th> Cpf </th>");
  print("<th> Data de Nascimento </th>");
  print("<th> Sexo </th>");
  print("<th> Estado civil </th>");
  print("<th> Observações </th>");
  print("<th> Acões </th>");
  print ("</tr>");

  while ($row=$result->fetch_object()) {
    print ("<tr class='text-center'>"); 
    print("<td>"."$row->id_aluno"."</td>");
    print("<td>"."$row->nome"."</td>");
    print("<td>"."$row->cpf"."</td>");
    print("<td>".date("d/m/Y",strtotime ($row->data_nasc))."</td>");
    print("<td>"."$row->sexo;"."</td>");
    print("<td>"."$row->estado_civil"."</td>");
    print("<td>"."$row->observacao"."</td>");
    print("<td><button onclick=\"location.href='?page=editar&id=".$row->id_aluno."'\" class='btn btn-success me-3'>Editar</button></td>");

    print("<td> <button onclick=\"if(confirm('deseja excluir?'))      
    {location.href='?page=salvar&acao=excluir&id=".$row->id_aluno."';}
    else{false;}
    \" class='btn btn-danger'>Excluir</button></td>");

    print("</tr>"); 
  }
}

