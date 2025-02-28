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
                        
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" id="nome" name="nome" class="form-control" required="">
                        </div>
                    
                        <div class="mb-3">
                            <label for="cpf" class="form-label">CPF:</label>
                            <input type="number" id="cpf" name="cpf" class="form-control" required="">
                        </div>
                    
                        <div class="mb-3">
                            <label for="endereco" class="form-label">Endereço:</label>
                            <input type="text" id="endereco" name="endereco" class="form-control" required="">
                        </div>
                    
                        <div class="mb-3">
                            <label for="nivel" class="form-label">Nível:</label>
                            <select id="nivel" name="nivel" class="form-select" required="">
                                <option value="Junior">Junior</option><option value="Pleno">Pleno</option><option value="Senior">Senior</option>
                            </select>
                        </div>
                    
                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" id="email" name="email" class="form-control" required="">
                        </div>
                    
                        <div class="mb-3">
                            <label for="senha" class="form-label">Senha:</label>
                            <input type="hidden" id="senha" name="senha" class="form-control" required="">
                        </div>
                    
                        <div class="mb-3">
                            <label for="senha" class="form-label">Senha:</label>
                            <input type="text" id="senha" name="senha" class="form-control" required="">
                        </div>
                    
                        <div class="mb-3">
                            <label for="status" class="form-label">Status:</label>
                            <select id="status" name="status" class="form-select" required="">
                                <option value="Ativo">Ativo</option><option value="Inativo">Inativo</option>
                            </select>
                        </div>
                    
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <button type="submit" class="btn btn-light">Cancelars</button>
                </form>
            
            
            
            
            
    </p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>