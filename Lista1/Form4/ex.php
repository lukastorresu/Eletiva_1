<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Formulário 4</h1>
    <p>
        
    
    
    
    <form method="post">
                        <div class="row">
                        <div class="col">
                            <label for="nome" class="form-label">Nome:</label>
                            <input placeholder="Informe o nome..." type="text" id="nome" name="nome" class="form-control" required="">
                        </div>
</div><div class="row">
                        <div class="col-2">
                            <label for="cpf" class="form-label">CPF:</label>
                            <input placeholder="Informe o cpf..." type="number" id="cpf" name="cpf" class="form-control" required="">
                        </div>
                    
                        <div class="col">
                            <label for="endereco" class="form-label">Endereço:</label>
                            <input placeholder="Informe o endereço..." type="text" id="endereco" name="endereco" class="form-control" required="">
                        </div>

                        <div class="col-2">
                            <label for="nivel" class="form-label">Nível:</label>
                            <select placeholder="---" id="nivel" name="nivel" class="form-select" required="">
                                <option value="Junior">Junior</option><option value="Pleno">Pleno</option><option value="Senior">Senior</option>
                            </select>
                        </div>
                        </div><div class="row">
                        <div class="col">
                            <label for="email" class="form-label">Email:</label>
                            <input placeholder="Informe o email..." type="email" id="email" name="email" class="form-control" required="">
                        </div>
                
                    
                        <div class="col-3">
                            <label for="senha" class="form-label">Senha:</label>
                            <input placeholder="Informe a senha..." type="password" id="senha" name="senha" class="form-control" required="">
                        </div>
                    
                        <div class="col-2">
                            <label for="status" class="form-label">Status:</label>
                            <select placeholder="---" id="status" name="status" class="form-select" required="">
                                <option value="Ativo">Ativo</option><option value="Inativo">Inativo</option>
                            </select>
                        </div>
                        <div class="row">
                        <div class="col-9">
</div>
                            <div class="col">
                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="submit" class="btn btn-light">Cancelar</button>
</div>
                    
                </form>
            
            
            
            
            
    </p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>