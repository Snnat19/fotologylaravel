<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Fotografo css/estilos.css">
    <title>Registrarse</title>
</head>
<body>
    <div class="container-form sign-up">  
        <form class="formulario" method="POST" action="registrodefotografo.php">
            <h2 class="create-account">Crear una cuenta</h2>
            <div class="iconos">
                <div class="border-icon">
                    <i class='bx bxl-facebook-circle'></i>
                </div>
                <div class="border-icon">
                    <i class='bx bxl-gmail'></i>
                </div>
                <div class="border-icon">
                    <i class='bx bxl-microsoft'></i>
                </div>
            </div>
            <p class="cuenta-gratis">Crear una cuenta gratis</p>
            <input type="text" name="nombre_fotografo" placeholder="nombre" required>
            <input type="tel" name="telefono" placeholder="telefono" required>
            <input type="email" name="email" placeholder="email" required>
            <input type="text" name="direccion" placeholder="direccion" required>
            <input type="password" name="contrasena" placeholder="contraseña" required>            
            <input type="file" name="foto_perfil" accept="image/*" required>
            <input type="submit" value="Registrarse" name="registrarse">   
        </form>

        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido a Fotology</h2>
                <p>Si ya tienes una cuenta, por favor inicia sesión aquí</p>
                <button><a href="index.php" class="sign-up-btn">Iniciar Sesión</a></button>
            </div>
        </div>
    </div>
    <script src="java.js"></script>
</body>
</html>