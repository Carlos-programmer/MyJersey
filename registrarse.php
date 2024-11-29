<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="STYLE.css">
    <title>Document</title>
</head>
<body>
    <nav class="navigation">
        <div class="regis" id="navbarSupportedContent">
            <p><a href="index.html">Inicia Sesión</a></p>
        </div>
    </nav>
        
    </header>
    <div class="titulo">
        <h1>-BIENVENIDO-</h1>
    </div>
    <h1 class="title">Registrate</h1>
    <div class="container">
        <form action="usuario.php" method="POST" class="input-group">
            <input type="text" class="names" name="nombre" required>
            <label class="nombre-label">Nombres</label><br>
            <input type="text" class="app" name="paterno" required>
            <label class="paterno-label">Apellido paterno</label><br>
            <input type="text" class="amm" name="materno" required>
            <label class="materno-label">Apellido materno</label><br>
            <input type="text" class="input" name="usuario" minlength="8" required>
            <label class="user-label">Usuario</label><br>    
            <input type="password" class="input1" name="contraseña" required>
            <label class="clave-label">Contraseña</label>   <br>             
            <button type="submit">Entrar</button>
            <div class="btnn">

            </div>
        </form>
    </div>
    <footer>
        <p>Derechos de Autor &copy; MY JERSEYS 2024</p>
    </footer>
</body>
</html>