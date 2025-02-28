<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Formulário 5</h1>
    <p>

    <form method="post">
        <div class="row">
            <div class="col-3">
                <label for="fname" class="form-label">First Name</label>
                <input type="text" id="fname" name="fname" class="form-control" required="">
            </div>

            <div class="col-3">
                <label for="lname" class="form-label">Last Name</label>
                <input type="text" id="lname" name="lname" class="form-control" required="">
            </div>
        </div>

        <label for="user" class="form-label">Username</label>
        <div class="input-group">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input id="user" name="user" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="col-6">
            <label for="email" class="form-label">Email (Optional)</label>
            <input placeholder="you@example.com" type="email" id="email" name="email" class="form-control">
        </div>

        <div class="col-6">
            <label for="endereco" class="form-label">Address</label>
            <input placeholder="1234 Main St" type="text" id="endereco" name="endereco" class="form-control" required="">
        </div>

        <div class="col-6">
            <label for="endereco2" class="form-label">Address 2 (Optional)</label>
            <input placeholder="Apartment or Suite" type="text" id="endereco2" name="endereco2" class="form-control">
        </div>
        <div class="row">
            <div class="col-2">
                <label for="pais" class="form-label">Country</label>
                <select id="pais" name="pais" class="form-select" required="">
                    <option value="Brasil">Brasil</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Dinamarca">Dinamarca</option>
                    <option value="Espanha">Espanha</option>
                    <option value="França">França</option>
                    <option value="Guiana">Guiana</option>
                    <option value="Holanda">Holanda</option>
                    <option value="Inglaterra">Inglaterra</option>
                </select>
            </div>

            <div class="col-1">
                <label for="estado" class="form-label">State</label>
                <select id="estado" name="estado" class="form-select" required="">
                    <option value="MG">MG</option>
                    <option value="PR">PR</option>
                    <option value="SC">SC</option>
                    <option value="SP">SP</option>
                </select>
            </div>

            <div class="col-2">
                <label for="cep" class="form-label">Zip</label>
                <input type="number" id="cep" name="cep" class="form-control" required="">
            </div>
        </div>

    </form>

    </p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>