<!DOCTYPE html>
  <html>
    <head>
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>

      <meta charset="utf-8">

      <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"/>

      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/customColors.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/ion.rangeSlider.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/index.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <script type="text/javascript">

        $(document).ready(function(){
              $('select').formSelect();
        });
      </script>

      <title>Buscador de Bienes Raices</title>
    </head>

  <body>
    <video src="img/video.mp4" id="vidFondo"></video>

    <div class="contenedor">

      <div class="card rowTitulo">
        <h1>Buscador de Bienes Raices</h1>
      </div>

      <div class="colFiltros">
        <form method="post" id="formulario">

          <div class="filtrosContenido">

            <div class="tituloFiltros">
              <h5>Realiza una búsqueda personalizada</h5>
            </div>

            <div class="filtroCiudad input-field">
              <label for="selectCiudad">Ciudad:</label>
              <select name="ciudad" id="selectCiudad">
                <option disabled="disabled" selected>Elige una ciudad</option>
                <option>New York</option>
                <option>Orlando</option>
                <option>Los Angeles</option>
                <option>Houston</option>
                <option>Washington</option>
                <option>Miami</option>
              </select>
            </div>

            <div class="filtroTipo input-field">
              <label for="selecTipo">Tipo:</label><br>
              <select name="tipo" id="selectTipo">
                <option disabled="disabled" selected>Elige un tipo</option>
                <option>Casa</option>
                <option>Casa de Campo</option>
                <option>Apartamento</option>
              </select>
            </div>

            <div class="filtroPrecio">
              <label for="rangoPrecio">Precio:</label>
              <input type="text" id="rangoPrecio" name="precio" value="" />
            </div>

            <div class="botonField">
              <input type="submit" class="btn white" value="Buscar" id="submitButton" name="Filter">
            </div>

          </div>
        </form>
      </div>


      <div class="colContenido">
        <div class="tituloContenido card">
          <h5>Resultados de la búsqueda:</h5>
          <div class="divider"></div>

          <div class="centrado">

            <?php
              require "funciones.php";
              require "buscador.php";

              if ( isset($_POST['Btn_All']) && ($_POST['Btn_All']=="Mostrar Todos") ) 
              {
                Show_All();
              }

              if (isset($_POST['Filter']) && ($_POST['Filter']=="Buscar") ) 
              {
                if( (isset($_POST['ciudad'])) && (isset($_POST['precio'])) )
                {
                  CityFilterSearch();
                }
                else if ( (isset($_POST['tipo'])) && (isset($_POST['precio']) ))
                {
                  TypeFilterSearch();
                }
                else if ( isset($_POST['precio']) )
                {
                  PriceFilterSearch();
                }
                else if ( (isset($_POST['ciudad'])) && (isset($_POST['tipo'])) && (isset($_POST['precio']) ))
                {
                  AllFilterSearch();
                }
              }
          
            ?>
            <form method="POST"> 
              <br><input type="submit" class="my-button" name="Btn_All" value="Mostrar Todos"/>
            </form>


            
          </div>

        </div>

      </div>
    </div>

    <script type="text/javascript" src="js/ion.rangeSlider.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>

  </body>
  </html>
