<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Formulário 3</h1>
    <p>
        
    
    
    <form method="post">
                        <div class="row">
                        <div class="col">
                            <label for="pname" class="form-label">Partner Name</label>
                            <input type="text" id="pname" name="pname" class="form-control" required="">
                        </div>
                    
                        <div class="col">
                            <label for="pemail" class="form-label">Partner Email ID</label>
                            <input type="email" id="pemail" name="pemail" class="form-control" required="">
                        </div>
</div>
<div class="row">
                        <div class="col">
                            <label for="plegalname" class="form-label">Partner Legal Name</label>
                            <input type="text" id="plegalname" name="plegalname" class="form-control" required="">
                        </div>
                    
                        <div class="col">
                            <label for="celular" class="form-label">Partner Mobile</label>
                            <input type="number" id="celular" name="celular" class="form-control" required="">
                        </div>
</div>
<div class="row">
                        <div class="col">
                            <label for="endereco" class="form-label">Partner Adress</label>
                            <input type="text" id="endereco" name="endereco" class="form-control" required="">
                        </div>
                        <div class="row">
                        <div class="col">
                            <label for="datainicial" class="form-label">Contract Start Date</label>
                            <input type="date" id="datainicial" name="datainicial" class="form-control" required="">
                        </div>
                    
                        <div class="col">
                            <label for="datafinal" class="form-label">Contract Expiry Date</label>
                            <input type="date" id="datafinal" name="datafinal" class="form-control" required="">
                        </div>
</div>
<div class="row">
                        <div class="col">
                            <label for="minloan" class="form-label">Minimum Loan Amount</label>
                            <input type="number" id="minloan" name="minloan" class="form-control" required="">
                        </div>
                    
                        <div class="col">
                            <label for="maxloan" class="form-label">Maximum Loan Amount</label>
                            <input type="number" id="maxloan" name="maxloan" class="form-control" required="">
                        </div>
</div>
<div class="row">
                        <div class="col">
                            <label for="juros" class="form-label">Interest Rate</label>
                            <input type="number" id="juros" name="juros" class="form-control" required="">
                        </div>
                    
                        <div class="col">
                            <label for="deposito" class="form-label">Deposit Amount</label>
                            <input type="number" id="deposito" name="deposito" class="form-control" required="">
                        </div>
</div>

                    <button type="submit" class="btn btn-primary">Save</button>

                </form>
            
            
            
            
    </p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>