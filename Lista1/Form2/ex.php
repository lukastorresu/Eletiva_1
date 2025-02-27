<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Formulário 2</h1>
    <p>
        
    
    <form method="post">
                        
    <div class="row">
                        <div class="col-1">
                            <label for="32" class="form-label">Código</label>
                            <input value="32" placeholder="32" type="number" id="32" name="32" class="form-control" disabled="">
                        </div>
                    
                        <div class="col">
                            <label for="nome" class="form-label">Nome</label>
                            <input placeholder="Nome Completo do Cliente" type="text" id="nome" name="nome" class="form-control" required="">
                        </div>
                    
                        <div class="col">
                            <label for="email" class="form-label">E-mail</label>
                            <input placeholder="cliente@dominio.com" type="email" id="email" name="email" class="form-control" required="">
                        </div>
                    
                        <div class="col-2 ">
                                <label for="cpf" class="form-label">CPF</label>
                                <input placeholder="Só números" type="number" id="cpf" name="cpf" class="form-control" required="">
                            </div>
</div>
<div class="row">
                        <div class="col">
                            <label for="celular" class="form-label">Nº Celular</label>
                            <input placeholder="Nº do celular" type="number" id="celular" name="celular" class="form-control" required="">
                        </div>
                    
                        <div class="col">
                            <label for="telefone" class="form-label">Nº Telefone Fixo </label>
                            <input placeholder="Nº telefone" type="number" id="telefone" name="telefone" class="form-control" required="">
                        </div>
                    
                        <div class="col">
                            <label for="cep" class="form-label">CEP</label>
                            <input placeholder="ex:88308070" type="number" id="cep" name="cep" class="form-control" required="">
                        </div>
                    
                        <div class="col">
                            <label for="endereco" class="form-label">Logradouro</label>
                            <input placeholder="ex:Eua 1400," type="text" id="endereco" name="endereco" class="form-control" required="">
                        </div>
                    
                        <div class="col-1">
                            <label for="numeroend" class="form-label">Nº</label>
                            <input placeholder="Nº" type="number" id="numeroend" name="numeroend" class="form-control" required="">
                        </div>
                    
                        <div class="col">
                            <label for="bairro" class="form-label">Bairro</label>
                            <input placeholder="Bairro" type="text" id="bairro" name="bairro" class="form-control" required="">
                        </div>
</div>
<div class="row">
                        <div class="col-3">
                            <label for="cidade" class="form-label">Cidade</label>
                            <input placeholder="Cidade" type="text" id="cidade" name="cidade" class="form-control" required="">
                        </div>
                    
                        <div class="col-1">
                            <label for="uf" class="form-label">UF</label>
                            <input placeholder="UF" type="text" id="uf" name="uf" class="form-control" required="">
                        </div>
                    
                        <div class="col-2">
                            <label for="status" class="form-label">Status</label>
                            <select placeholder="Selecione" id="status" name="status" class="form-select" required="">
                                <option value="opcao1">opcao1</option><option value="opcao2">opcao2</option>
                            </select>
                        </div>
</div>
<div class="row">
<div class="col">
  <p> </p>
</div>
                    <div class="col">
                      <button type="submit" class="btn btn-danger">Resetar</button>
                      <button type="submit" class="btn btn-success">Próximo</button>
</div>
</div>
                </form>
            
            
            
    </p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>