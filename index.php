<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>CiTIM Grupo XB</title>
    <link rel="stylesheet" href="css/problemaStem.css"/>

    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <script src="js/calcularStem.js"></script>
</head>
<body>
  <section class="wrapper">
    <header>
      <h1 class="logo"><a href="stem.html">CiTIM</a></h1>
      
    </header>
    <section id="contenedor">
      <section  class="problema">
        <h2>Problema: Calcule la energía correspondiente a la radiación visible de mayor frecuencia.
</h2>
        <p>Descripción:</p>
        <p>El rango de longitud de onda del especto visible es : 0.4 - 0.7.<br>
        </p>
      </section>
      <section  class="esquemaProblema">
        <h2>Esquema</h2>
        <center>
        <img class="imgProblema" src="images/espectro.jpg">
        </center>
      </section>
      <section class="formulas">
        <h2>Fórmulas</h2>
        La fórmula de Planck es E = h·v, donde E es la energía, h la constante de Planck y v la frecuencia (Hz o s-1).
      </section>
      <section class="datos">
        <h2>Datos:</h2>
        La radiación electromagnética con una longitud de onda entre 380 nm y 760 nm (790-400 terahercios) es detectada por el ojo humano y se percibe como luz visible.<br>


      
      </section>
      <section class="calculos">
        <h2>Solución para Calcular la distancia total</h2>
        <p>a)El espectro visible corresponde a la radiación de longitud de onda comprendida entre 450 y 700 nm.<br>
        </p>
        
        
        <button onclick="calcula_densidad();">Presiona para calcular</button>
      </section>
      <?php
    function calcula_densidad() {
      $masa = 5.97E24;
      $radio = 6378e3;
      $volumen = (4/3) * M_PI * $radio * $radio * $radio;
      $densidad = $masa / $volumen;
      $d = '<span id="resultadoA">' . $densidad . ' kg/(metro cubico)</span>';
      return $d;
    }
   
?>
 
      <section class="resultado">
        <h2>Resultado:</h2>
        <div id="resultadoA"></div>
        <?php
 print "<h1>  densidad = ".calcula_densidad(). "mide principalmente el intervalo de luz visible de 340 a 900 nm,</h1>";
?>
        
      </section>
    </section>
    <footer class="pie">
     Creative Commons versión 3.0 SciSoft 2023
    </footer>
  </section>
</body>
</html>
