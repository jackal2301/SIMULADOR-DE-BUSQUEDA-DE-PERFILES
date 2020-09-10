<?php
  $mysqli = new mysqli('localhost', 'root', '', 'banco_instructores');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Demo de menú desplegable</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>
<body>
<h1>SIMULADOR DE BUSQUEDA DE PERFILES APE</h1>
  <div>                        
    <p>Seleccione una Regional del siguiente menú:</p>
    <p>Regional:
      <select id="lista1">
        <option value="0">Selecciona:</option>
        <?php
          $query = $mysqli -> query ("SELECT DISTINCT Cod_Centro, Regional FROM centro_prog");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option  "value="'.$valores[Cod_Centro].'">'.$valores[Regional].'</option>';
          }
        ?>
      </select>
<div>	 
	<p>Seleccione el sector del siguiente menú:</p>
    <p>Sector:
      <select id="lista2">
		<option value="0">Selecciona:</option>
        <?php
          $query = $mysqli -> query ("SELECT DISTINCT Red FROM centro_prog");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option  "value="'.$valores[Cod_Centro].'">'.$valores[Red].'</option>';
          }
        ?>
      </select>
</div>

<button>Consultar</button>
  
  </div>
</body>

</html>



