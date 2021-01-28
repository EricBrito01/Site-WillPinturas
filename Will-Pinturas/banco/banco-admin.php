<?php

function login($conexao,$nome, $senha){
    
    $sql = "select * from tb_admin where tb_admin_email = '$nome' and tb_admin_senha= '$senha' limit 1";
    
    $resultado=  mysqli_query($conexao,$sql);
      
    return mysqli_fetch_assoc($resultado);
}

function CadastrarServico($conexao,$titulo,$descricao){
    $sql="insert into tb_servicos(tb_servico_titulo,tb_servico_descricao) values ('$titulo','$descricao');";

    return mysqli_query($conexao,$sql);
}

function CadastrarFoto($conexao,$foto){
    $sql="insert into tb_foto(tb_foto_caminho) values ('$foto');";

    return mysqli_query($conexao,$sql);
}
?>