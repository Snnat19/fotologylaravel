<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PagPrincipal</title>
    <link rel="stylesheet" href="css/Cliente css/Fotografos.css" />
    <link rel="icon" href="Recursos/LOGOA.png" />
    <script src="https://kit.fontawesome.com/9bf48cfb4e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/646ac4fad6.js" crossorigin="anonymous"></script>
</head>
<body>
    <script src="js/dropdown.js"></script>

    <header class="header">
        <div class="logo">
            <img src="Recursos/LOGOA.png" alt="Logo" />
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

    <div class="categorias">
        <h1>Fotógrafos</h1>
    </div>

    <div class="container-card">
      <div class="card">
          <figure>
              <img src="Recursos/fotografo1.jpg" alt="Fotógrafo 1" />
          </figure>
          <div class="contenido-card">
              <h3>Fotógrafo 1</h3>
              <p>
                  María es una fotógrafa apasionada con un enfoque en retratos emocionales. Sus fotos capturan la belleza interior de sus sujetos y transmiten una sensación de intimidad única. Con un estilo distintivo y una habilidad para crear conexiones genuinas, María se destaca en la fotografía de retratos.

              </p>
              <!-- Estrellas de calificación para el Fotógrafo 1 -->
              <fieldset class="starability-growRotate">
                  <input type="radio" id="star5_1" name="rating_1" value="5" />
                  <label for="star5_1" title="5 stars"></label>
                  <input type="radio" id="star4_1" name="rating_1" value="4" />
                  <label for="star4_1" title="4 stars"></label>
                  <input type="radio" id="star3_1" name="rating_1" value="3" />
                  <label for="star3_1" title="3 stars"></label>
                  <input type="radio" id="star2_1" name="rating_1" value="2" />
                  <label for="star2_1" title="2 stars"></label>
                  <input type="radio" id="star1_1" name="rating_1" value="1" />
                  <label for="star1_1" title="1 star"></label>
              </fieldset>
              <textarea id="comment_1" name="comment_1" rows="4" cols="30" placeholder="Deja un comentario..."></textarea>
              <a class="mas" href="#"><button onclick="enviarComentario(1)">Enviar</button></a>
              <script>
                  function enviarComentario(id) {
                      // Obtener el contenido del área de texto
                      var comentario = document.getElementById('comment_' + id).value;

                      // Limpiar el contenido del área de texto después de enviar el comentario
                      document.getElementById('comment_' + id).value = '';
                  }
              </script>
          </div>
      </div>
      <div class="card">
          <figure>
              <img src="Recursos/fotografo2.jpg" alt="Fotógrafo 2" />
          </figure>
          <div class="contenido-card">
              <h3>Fotógrafo 2</h3>
              <p>
                  Sofia es una fotógrafa documental que se especializa en contar historias a través de sus imágenes. Su enfoque ético y su capacidad para capturar momentos auténticos le han valido reconocimiento en el mundo de la fotografía documental. A través de su lente, Sofia busca dar voz a las comunidades marginadas y destacar la diversidad cultural.

              </p>
              <!-- Estrellas de calificación para el Fotógrafo 2 -->
              <fieldset class="starability-growRotate">
                  <input type="radio" id="star5_2" name="rating_2" value="5" />
                  <label for="star5_2" title="5 stars"></label>
                  <input type="radio" id="star4_2" name="rating_2" value="4" />
                  <label for="star4_2" title="4 stars"></label>
                  <input type="radio" id="star3_2" name="rating_2" value="3" />
                  <label for="star3_2" title="3 stars"></label>
                  <input type="radio" id="star2_2" name="rating_2" value="2" />
                  <label for="star2_2" title="2 stars"></label>
                  <input type="radio" id="star1_2" name="rating_2" value="1" />
                  <label for="star1_2" title="1 star"></label>
              </fieldset>
              <textarea id="comment_1" name="comment_1" rows="4" cols="30" placeholder="Deja un comentario..."></textarea>
              <a class="mas" href="#"><button onclick="enviarComentario(1)">Enviar</button></a>
              <script>
                  function enviarComentario(id) {
                      // Obtener el contenido del área de texto
                      var comentario = document.getElementById('comment_' + id).value;

                      // Limpiar el contenido del área de texto después de enviar el comentario
                      document.getElementById('comment_' + id).value = '';
                  }
              </script>
          </div>
      </div>
      <div class="card">
          <figure>
              <img src="Recursos/fotografo3.jpg" alt="Fotógrafo 3" />
          </figure>
          <div class="contenido-card">
              <h3>Fotógrafo 3</h3>
              <p>
                  Carlos es un fotógrafo de naturaleza apasionado por capturar la belleza del mundo natural. Sus impresionantes paisajes y fotografías de vida silvestre han sido ampliamente elogiados por su atención al detalle y su habilidad para transmitir la majestuosidad de la naturaleza a través de sus imágenes.

              </p>
              <!-- Estrellas de calificación para el Fotógrafo 3 -->
              <fieldset class="starability-growRotate">
                  <input type="radio" id="star5_3" name="rating_3" value="5" />
                  <label for="star5_3" title="5 stars"></label>
                  <input type="radio" id="star4_3" name="rating_3" value="4" />
                  <label for="star4_3" title="4 stars"></label>
                  <input type="radio" id="star3_3" name="rating_3" value="3" />
                  <label for="star3_3" title="3 stars"></label>
                  <input type="radio" id="star2_3" name="rating_3" value="2" />
                  <label for="star2_3" title="2 stars"></label>
                  <input type="radio" id="star1_3" name="rating_3" value="1" />
                  <label for="star1_3" title="1 star"></label>
              </fieldset>
              <textarea id="comment_1" name="comment_1" rows="4" cols="30" placeholder="Deja un comentario..."></textarea>
              <a class="mas" href="#"><button onclick="enviarComentario(1)">Enviar</button></a>
              <script>
                  function enviarComentario(id) {
                      // Obtener el contenido del área de texto
                      var comentario = document.getElementById('comment_' + id).value;

                      // Limpiar el contenido del área de texto después de enviar el comentario
                      document.getElementById('comment_' + id).value = '';
                  }
              </script>
          </div>
      </div>
      <div class="card">
          <figure>
              <img src="Recursos/fotografo4.jpg" alt="Fotógrafo 4" />
          </figure>
          <div class="contenido-card">
              <h3>Fotógrafo 4</h3>
              <p>
                  Juan es un fotógrafo de moda reconocido por su estilo vanguardista y su capacidad para capturar la esencia de la moda contemporánea. Sus imágenes dinámicas y su ojo para el detalle lo han convertido en un referente en el mundo de la fotografía de moda, colaborando con importantes marcas y revistas internacionales.

              </p>
              <!-- Estrellas de calificación para el Fotógrafo 4 -->
              <fieldset class="starability-growRotate">
                  <input type="radio" id="star5_4" name="rating_4" value="5" />
                  <label for="star5_4" title="5 stars"></label>
                  <input type="radio" id="star4_4" name="rating_4" value="4" />
                  <label for="star4_4" title="4 stars"></label>
                  <input type="radio" id="star3_4" name="rating_4" value="3" />
                  <label for="star3_4" title="3 stars"></label>
                  <input type="radio" id="star2_4" name="rating_4" value="2" />
                  <label for="star2_4" title="2 stars"></label>
                  <input type="radio" id="star1_4" name="rating_4" value="1" />
                  <label for="star1_4" title="1 star"></label>
              </fieldset>
              <textarea id="comment_1" name="comment_1" rows="4" cols="30" placeholder="Deja un comentario..."></textarea>
              <a class="mas" href="#"><button onclick="enviarComentario(1)">Enviar</button></a>
              <script>
                  function enviarComentario(id) {
                      // Obtener el contenido del área de texto
                      var comentario = document.getElementById('comment_' + id).value;

                      // Limpiar el contenido del área de texto después de enviar el comentario
                      document.getElementById('comment_' + id).value = '';
                  }
              </script>
          </div>
      </div>
  </div>

</body>
</html>
