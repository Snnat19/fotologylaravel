<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PagPrincipal</title>
    <link rel="stylesheet" href="css/Home y Inicio css/home.css">
    <link rel="icon" href="Recursos/LOGOA.png">
    <script src="https://kit.fontawesome.com/9bf48cfb4e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/646ac4fad6.js" crossorigin="anonymous"></script>
</head>
<body>
    <script src="js/dropdown.js"></script>

    <header class="header">
        <div class="logo">
            <img src="Recursos/LOGOA.png" alt="Logo">
        </div>
        <nav>
            <ul class="linksnav">
                <li><a href="{{ route('InicioDeSesion.usuario') }}">Usuario</a></li>
                <li><a href="{{ route('InicioDeSesion.fotografo') }}">Fotografo</a></li>
                <li><a href="{{ route('InicioDeSesion.administrador') }}">Administrador</a></li>
            </ul>
        </nav>
    </header>

    <div class="carrusel">
        <ul>
            <li><img src="{{ asset('Recursos/Carr1.jpg') }}" alt=""></li>
            <li><img src="{{ asset('Recursos/Carr1.jpg') }}" alt=""></li>
            <li><img src="{{ asset('Recursos/Carr1.jpg') }}" alt=""></li>
            <li><img src="{{ asset('Recursos/Carr1.jpg') }}" alt=""></li>
        </ul>
    </div>

    <section>
        <div class="contenedor-nosotros contenedor">
            <div class="texto-nosotros">
                <h1>¿Necesitas Ayuda?</h1>
                <p>
                    La fotografía digital es mucho más que tomar imágenes; es una forma de arte que fusiona visión, técnica y creatividad. Nos adentramos en la importancia de la composición, el manejo de la luz y el uso de herramientas digitales para dar vida a tus ideas con impacto visual.
                </p>
                <p>
                    Desde la majestuosidad de los paisajes hasta la intimidad de los retratos y la emoción del fotoperiodismo, cada estilo fotográfico es un viaje único. Aquí encontrarás recursos para explorar diferentes géneros y descubrir tu propia voz creativa en cada imagen que captures.
                </p>
                <p>
                    Entendemos que cada fotógrafo enfrenta desafíos y preguntas en su camino. Ofrecemos asistencia integral, desde tutoriales sobre equipos y técnicas hasta consejos prácticos para la edición y la publicación de tus obras. ¡Estamos aquí para apoyarte en cada paso de tu viaje fotográfico!
                </p>
                <p>
                    Si quieres saber más de nosotros, haz clic en el botón de abajo.
                </p>
                <a class="boton" href="{{ url('/ayuda') }}">Ayuda</a>
              </div>
        </div>
    </section>

    <footer class="footer">
        <p>
            Todos los derechos reservados &copy; 2024 al grupo de Fotology, desarrollado por Fotologystudios
        </p>
    </footer>
</body>
</html>
