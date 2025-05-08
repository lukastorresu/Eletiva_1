<?php
    require_once("cabecalho.php");
    function retornaCategorias(){
        require("conexao.php");
        try {
            $sql = "SELECT * FROM categoria";
            $stmt = $pdo->query($sql);
            return $stmt->fetchAll();
        } catch (Exception $e) {
            die("Erro ao consultar categorias: ".$e->getMessage());
        }
    }

    function inserirProduto($nome, $descricao, $preco, $categoria){
        require("conexao.php");
        try {
            $sql = "INSERT into produto (nome, descricao, preco, categoria_id)
            VALUES (?,?,?,?)";
            $stmt = $pdo->PREPARE($sql);
            if ($stmt->execute([$nome, $descricao, $preco, $categoria]))
                header("location> produtos.php?cadastro=true");
            else
                header("location> produtos.php?cadastro-false");
            return $stmt->fetchAll();
        } catch (Exception $e) {
            die("Erro ao inserir produto: ".$e->getMessage());
        }
    }

    $categorias = retornaCategorias();

    if ($_SERVER['REQUET_METHOD'] == "POST"){
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $preco = $_POST['preco'];
        $cataegoria = $_POST['categoria'];    
        inserirProduto($nome,$descricao,$preco,$categoria);
    }
?>

    <h2>Novo Produto</h2>

    
    <form method="post">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" id="nome" name="nome" class="form-control" required="">
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea id="descricao" name="descricao" class="form-control" rows="4" required=""></textarea>
        </div>
        <div class="mb-3">
            <label for="valor" class="form-label">Valor</label>
            <input type="number" id="valor" name="valor" class="form-control" required="">
        </div>
        <div class="mb-3">
            <label for="categoria" class="form-label">Categoria</label>
            <select id="categoria" name="categoria" class="form-select" required="">
            <?php
                foreach($categorias as $c):
            ?>
                <option value="<?= $c['id'] ?>"><?= $c['nome'] ?></option>
            <?php
                endforeach;
            ?>
        </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
    <button type="button" class="btn btn-secondary"
             onclick="history.back();">Voltar</button>
</form>


<?php
    require_once("rodape.php");