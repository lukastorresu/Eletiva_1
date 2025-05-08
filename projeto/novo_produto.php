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

    $categorias = retornaCategorias();
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
            <select id="categoria" name="categoria" class="form-control" required="">
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