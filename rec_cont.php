<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de inicio de sesión</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-5">
        <div class="col-md-6">
            <h2>Recuperar contraseña</h2>
            <form action="recovery.php" method="POST">
                <div class="form-group">
                    <label for="email">Correo electrónico:</label>
                    <input type="email" class="form-control" id="floatingInput" name="email" required>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Recuperar contraseña</button>
            </form>
        </div>
    </div>
    </div>
</body>
</html>