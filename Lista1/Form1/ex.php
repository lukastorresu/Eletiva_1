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
                        
                        
                      <div class="row">
                        <div class="col">
                            <label for="fname" class="form-label">First Name</label>
                            <input placeholder="Mark" type="text" id="fname" name="fname" class="form-control" required="">
                        </div>
                    
                        <div class="col">
                            <label for="lname" class="form-label">Last Name</label>
                            <input placeholder="Otto" type="text" id="lname" name="lname" class="form-control" required="">
                        </div>
                    
                        <div class="input-group col">
                          <span class="input-group-text" id="basic-addon1">@</span>
                          <input placeholder="Username" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                      </div>
</div>
<div class="row">
                        <div class="col">
                            <label for="City" class="form-label">City</label>
                            <input placeholder="City" type="text" id="City" name="City" class="form-control" required="">
                        </div>
                    
                        <div class="col">
                            <label for="State" class="form-label">State</label>
                            <input placeholder="State" type="text" id="State" name="State" class="form-control" required="">
                        </div>
                    
                        <div class="col-2">
                            <label for="zip" class="form-label">Zip</label>
                            <input placeholder="Zip" type="number" id="zip" name="zip" class="form-control" required="">
                        </div>
</div>
                        <div class="form-check">
                                <input type="checkbox" id="conf" name="conf" class="form-check-input" required="">
                                <p>Agree to terms and coditions</p>
                                <label for="conf" class="form-check-label"></label> 
                            </div>
                    
                    <button type="submit" class="btn btn-primary">Submit form</button>
                </form>
            
            
    </p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>