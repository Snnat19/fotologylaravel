<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link rel="stylesheet" href="css/Cliente css/stylepagprincipal.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
<header class="header">
    <div class="logo">
        <img src="{{ asset('Recursos/LOGOA.png') }}" alt="Logo" />
    </div>
    <div class="perfil-btn">
        <form id="perfilForm" method="GET" action="{{ route('perfil.usuario') }}">
            <input type="hidden" name="usuario_id" value="{{ Auth::id() }}">
            <button type="submit" class="btn-profile"></button>
        </form>
    </div>
    <nav>
    <ul class="linksnav">
                <li><a href="<?php echo route('PaginaClientes.pagina'); ?>">Inicio</a></li>
                <li><a href="<?php echo route('PaginaClientes.fotografos'); ?>">Fotografos</a></li>
                <li><a href="<?php echo route('PaginaClientes.categorias'); ?>">Categorías</a></li>
                <li><a href="<?php echo route('PaginaClientes.contacto'); ?>">Contacto</a></li>
            </ul>
    </nav>
    <a class="btn" href="<?php echo route('InicioDeSesion.Usuario'); ?>"><button>Cerrar Sesion</button></a>
</header>
    <div class="fdestacados">
      <h1>Fotografos</h1>
      <h2>Destacados</h2>
    </div>
    <div class="contenedor">
      <img class="imagen" src="Recursos/Paisaje1.jpg" alt="Paisaje" />
      <div class="texto">
        <h1 class="nombre">Erick Ricaurte</h1>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea officiis
          quis optio voluptatem deleniti, labore cumque, debitis neque, dolor
          autem consequatur beatae. Quam excepturi rem, eaque quasi ad esse
          harum?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea
          officiis quis optio voluptatem deleniti, labore cumque, debitis neque,
          dolor autem consequatur beatae. Quam excepturi rem, eaque quasi ad
          esse harum?Lorem ipsum, dolor sit amet consectetur adipisicing elit.
          Ea officiis quis optio voluptatem deleniti, labore cumque, debitis
          neque, dolor autem consequatur beatae. Quam excepturi rem, eaque quasi
          ad esse harum?Lorem ipsum, dolor sit amet consectetur adipisicing
          elit. Ea officiis quis optio voluptatem deleniti, labore cumque,
          debitis neque, dolor autem consequatur beatae. Quam excepturi rem,
          eaque quasi ad esse harum?Lorem ipsum.
        </p>
        <a class="mas" href="#"><button>Saber mas</button></a>
      </div>
    </div>
    <div class="categorias">
      <h1>Categorias</h1>
      <h2>Principales</h2>
      <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea officiis
        quis optio voluptatem deleniti, labore cumque, debitis neque, dolor
        autem consequatur beatae. Quam excepturi rem, eaque quasi ad esse
        harum?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea
        officiis quis optio voluptatem deleniti, labore cumque, debitis neque,
        dolor autem consequatur beatae. Quam excepturi rem, eaque quasi ad esse
        harum?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea
        officiis quis optio voluptatem deleniti, labore cumque, debitis neque,
        dolor autem consequatur beatae. Quam excepturi rem, eaque quasi ad esse
        harum?
      </p>
    </div>
    <div class="container-card">
      <div class="card">
        <figure>
          <img
            src="https://media.colombian.com.co/wp-content/uploads/2018/12/04114439/ImagenDestacada-Paisajes-01.jpg"
          />
        </figure>
        <div class="contenido-card">
          <h3>Paisajes</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea
            officiis quis optio voluptatem deleniti, labore cumque, debitis
            neque, dolor autem consequatur beatae.
          </p>
          <a class="smas" href="#"><button>Ver</button></a>
        </div>
      </div>
      <div class="card">
        <figure>
          <img src="https://i.blogs.es/a709d5/kevin-biskaborn/1366_2000.jpg" />
        </figure>
        <div class="contenido-card">
          <h3>Animales</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea
            officiis quis optio voluptatem deleniti, labore cumque, debitis
            neque, dolor autem consequatur beatae.
          </p>
          <a class="smas" href="#"><button>Ver</button></a>
        </div>
      </div>
      <div class="card">
        <figure>
          <img
            src="https://www.formacionyestudios.com/wp-content/uploads/2018/09/como-ser-modelo.jpg"
          />
        </figure>
        <div class="contenido-card">
          <h3>Personas</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea
            officiis quis optio voluptatem deleniti, labore cumque, debitis
            neque, dolor autem consequatur beatae.
          </p>
          <a class="smas" href="#"><button>Ver</button></a>
        </div>
      </div>
      <div class="card">
        <figure>
          <img
            src="https://4.bp.blogspot.com/-_wiVPaJL1UQ/Vu76uPP_RnI/AAAAAAAACHY/iq58X7aV6bYC80JuBxK3OnZptTYJxNaGw/s1600/importancia-decoracion-eventos-sociales.jpg"
          />
        </figure>
        <div class="contenido-card">
          <h3>Eventos</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea
            officiis quis optio voluptatem deleniti, labore cumque, debitis
            neque, dolor autem consequatur beatae.
          </p>
          <a class="smas" href="#"><button>Ver</button></a>
        </div>
      </div>
    </div>
  </body>
</html>
