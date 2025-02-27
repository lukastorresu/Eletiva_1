<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Formulário 1</h1>
    <p>
        
    <form method="post" action="resposta.php">
                        
                        
                        <div class="mb-3">
                            <label for="fname" class="form-label">First Name</label>
                            <input type="text" id="fname" name="fname" class="form-control" required="">
                        </div>
                    
                        <div class="mb-3">
                            <label for="lname" class="form-label">Last Name</label>
                            <input type="text" id="lname" name="lname" class="form-control" required="">
                        </div>
                    
                        <div class="mb-3">
                            <label for="City" class="form-label">City</label>
                            <input type="text" id="City" name="City" class="form-control" required="">
                        </div>
                    
                        <div class="mb-3">
                            <label for="State" class="form-label">State</label>
                            <input type="text" id="State" name="State" class="form-control" required="">
                        </div>
                    
                        <div class="mb-3">
                            <label for="zip" class="form-label">Zip</label>
                            <input type="number" id="zip" name="zip" class="form-control" required="">
                        </div>

                        <div class="form-check">
                                <input type="checkbox" id="conf" name="conf" class="form-check-input" required="">
                                <p>Agree to terms and coditions</p>
                                <label for="conf" class="form-check-label"></label> 
                            </div>
                    
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            
            
    </p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>