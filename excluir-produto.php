<?php

    require 'src/conexao-banco.php';
    require 'src/Modelo/Produto.php';
    require 'src/Repositorio/ProdutoRepositorio.php';

    $id = $_GET['id'];
    $repository = new ProdutoRepositorio($pdo);
    $repository->deletar($id);




