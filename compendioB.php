<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compendio de Libros</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/biblioteca.jpg" type="image/x-icon">
  </head>
  <body>
    


  
    <section class="cabecera">
      <div id="texto">
        <a href="index.html">
          <img id="favicon" src="img/favicon.png" alt="logo_biblioteca" >
        </a>
          <p><H3>Biblioteca ISAM</H3></p>
      </div>
      <div id="boton1">
        <a href="compendioB.php">
          <button>Compendio de libros</button>
        </a>

      </div>
      

    </section>
    <section class="body">
      <h1 class="titulo1">COMPENDIO DE LIBROS</h1>
      <table>
        <thead>
          <tr>
            <th>Imagen</th>
            <th>Nombre Libro</th>
            <th>Autor/es</th>
            <th>ISBN</th>
            <th>Estado</th>
            <th>Opciones</th>
          </tr>
        </thead>
        <tbody>
          <?php
            include "vinculo.php";
            $sql = "SELECT * FROM libros ORDER BY id_libro DESC";
            $resultado = mysqli_query($conexion,$sql);

            while ($valores=mysqli_fetch_array($resultado)) {
              $id = $valores['id_libro'];
              $nom_libro = $valores['nom_lib'];
              $autor = $valores['autor_lib']; 
              $isbn = $valores['isbn_lib'];
              $estado_lib = $valores['estado_lib'];
              
              echo '<tr>';

                echo '<td>';
                  echo $id;
                echo '</td>';
                echo '<td>';
                  echo $nom_libro;
                echo '</td>';
                echo '<td>';
                  echo $autor;
                echo '</td>';
                echo '<td>';
                  echo $isbn;
                echo '</td>';
                echo '<td>';
                  echo $estado;
                echo '</td>';
                echo '<td>';
                  echo '
                    <a id="boton2" href="baja_libro.php?id_libro='.$id.'" >
                      <!-- Aquí van los íconos en formato .SVG -->
                    
                    </a>
                    <a id="boton3" href="mod_lib1.php?id_libro='.$id.'" >
                      <!-- Aquí van los íconos en formato .SVG -->
                    
                    </a>
                    <a id="boton4" href="visual_lib1.php?id_libro='.$id.'" >
                      <!-- Aquí van los íconos en formato .SVG -->
                    
                    </a>
                  ';
                echo '</td>';
              echo '</tr>';
            }
          
          ?>
        </tbody>
      </table>
    </section>
    <section class="footer">
      <p>Cáceres Gastón - Todos los Derechos Reservados</p>
    </section>
  </body>
</html>