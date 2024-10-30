<?php
    require 'src/conexao-banco.php';
    require 'src/Modelo/Produto.php';
    require 'src/Repositorio/ProdutoRepositorio.php';

    $repositorio = new ProdutoRepositorio($pdo);
    $todosOsItens = $repositorio->obterTodosProdutos();
?>

<style>
    table{
        width: 90%;
        margin: auto 0;
    }
    table, th, td{
        border: 1px solid #000;
    }

    table th{
        padding: 11px 0 11px;
        font-weight: bold;
        font-size: 18px;
        text-align: left;
        padding: 8px;
    }

    table tr{
        border: 1px solid #000;
    }

    table td{
        font-size: 18px;
        padding: 8px;
    }
    .container-admin-banner h1{
        margin-top: 40px;
        font-size: 30px;
</style>

<table>
    <thead>

    <tr>
        <th>Produto</th>
        <th>Tipo</th>
        <th>Descricão</th>
        <th>Valor</th>

    </tr>

    </thead>
    <tbody>
    <?php foreach ($todosOsItens as $itens): ?>
        <tr>
            <td><?php echo $itens->getNome() ?> </td>
            <td><?php echo $itens->getTipo() ?></td>
            <td><?php echo $itens->getDescricao() ?></td>
            <td><?php echo $itens->getPrecoFormated() ?></td>
            <td><a class="botao-editar" href="editar-produto.php?id=<?=$itens->getId()?>">Editar<a/></td>

        </tr>
    <?php endforeach; ?>

    </tbody>
</table>
