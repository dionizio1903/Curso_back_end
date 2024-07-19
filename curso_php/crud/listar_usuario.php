<?php 

$sql = "SELECT * FROM usuario";

$result = mysqli_query($conn, $sql);

$quant = $result->num_rows; // pega a quantidade de linhas do resultado

if ($quant > 0){
    print "<table class='table table-hover table-striped table-bordered'>";

    print ("<tr class='text-center'>");
    print("<th> ID </th>");
    print("<th> Nome </th>");
    print("<th> Email </th>");
    print("<th> Data de nascimento </th>");
    print("<th> Acões </th>");
    print ("</tr>");

    while($row=$result->fetch_object()){
    print ("<tr class='text-center'>");    
    print("<td>"."$row->id_usuario"."</td>");
    print("<td>"."$row->nome"."</td>");
    print("<td>"."$row->email"."</td>");
    print("<td>".date("d/m/Y",strtotime($row->data_nasc))."</td>");
    print("<td> <button onclick=\"location.href='?page=editar&id=".$row->id_usuario."';\" class='btn btn-success me-3'>Editar</button>");
    
    print(" <button onclick=\"if(confirm('deseja excluir?'))      
    {location.href='?page=salvar&acao=excluir&id=".$row->id_usuario."';}
    else{false;}
    \" class='btn btn-danger'>Excluir</button></td>");
    
    print("</tr>");   
} 
print"</table>"; 
}

else{
  print("<p class = 'alert alert-danger'> Não a resultados para exibir</p>");
}
