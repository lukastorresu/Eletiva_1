<?php
  require_once("cabecalho.php");

  function retornaProdutos(){
    require("conexão.php");
    try{
        $sql = "SELECT p.*, c.nome as nome_categoria
        FROM produto p
        INNER JOIN categoria c ON c.id = p.categoria_id";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll();
    }catch (Exception $e){
        die("Erro ao consultar produtos: ".$e->getMessage());
    }
}

$produtos = retornaProdutos();
?>
  
<h2>Produtos</h2>
<a href="novo_produto.php" class="btn btn-success mb-3">Novo Registro</a>
<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th><th>Descrição</th><th>Valor</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
      <tr>
          <td>1</td>
          <td>Exemplo</td><td>Exemplo</td><td>Exemplo</td>
          <td>
              <a href="editar_produto.php" class="btn btn-warning">Editar</a>
              <a href="consultar_produto.php" class="btn btn-info">Consultar</a>
          </td>
      </tr>
    </tbody>
</table>


<?php
  require_once("rodape.php");
?>