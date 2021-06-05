<?php
/*============================
VISTA Contiene etiquetas html
=============================*/
$respuesta = Controlador::metodoControlador("hombre");

echo $respuesta;

/*============================
CONTROLADOR
=============================*/
class Controlador{
  static public function metodoControlador($persona){
    if($persona == "hombre"){
        
        $respuesta = Modelo::metodoModelo($persona);
        return $respuesta;
    }

  }
}
/*============================
MODELO
=============================*/
class Modelo{
   static public function metodoModelo($persona){
       if($persona != ""){
           return "juan";
       }
   }

}




?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Maquetar una pagina</title>
    
    <link rel="stylesheet" type="text/css" href="../styles.css"/>
</head>


<body>
<h3 class="border">PHP Y MYSQL</h1>
  <!--  <div class="navegacion">
        <nav class="contenedor">
            <a href="#">Recetas</a>
            <a href="#">Productos</a>
            <a href="#">Recomendaciones</a>
            <a href="#">Videos</a>
        </nav>
    </div>-->
    <div class="contenedor">
        <h1 class="text" class="seccion2" style=" margin: 12px ">Seleccionando datos</h1>
        <hr style=" margin: 12px ">

        <main>
            <h1 class="titulo" id="cuadro">Detalles de usuario</h1>
        </main>
        
<table>
  <tr>
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
  </tr>
  <tr>
    <td>Ernst Handel</td>
    <td>Roland Mendel</td>
    <td>Austria</td>
  </tr>

  
</table>
  
        <hr style=" margin: 12px ">
    </div>
    <div class="border">
    <h3>ING. Saul Sotelo Suastegui</h3>
    </div>
</body>



</html>