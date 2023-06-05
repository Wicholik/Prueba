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
        <h2>Problema: Edad del Universo para una constante de Hubble</h2>
        <p>Descripción:</p>
        <p>Estime la edad del Universo para una constante de Hubble de:<br> <br> (a) 50km/s/M pc<br> (b) 75km/s/M pc <br>(c) 100km/s/M pc. <br><br>Explique cómo utilizando las edades de los cúmulos globurales se puede poner un límite al valor de la constante. <br>
        </p>
      </section>
      <section  class="esquemaProblema">
        <h2>Esquema</h2>
        <center>
        <img class="imgProblema" src="images/problema.jpg">
        </center>
      </section>
      <section class="formulas">
        <h2>Fórmulas</h2>
        ◉ La edad del Universo se puede calcular a partir de la inversa de la constante de Hubble, t = 1/H.<br><br>
        ◉ La distancia a un objeto se puede calcular a partir de su velocidad de recesión y la constante de Hubble, d = v/H.
        <br>
      </section>
      <section class="datos">
        <h2>Datos:</h2>
        ◉ La constante de Hubble mide la velocidad a la que se alejan las galaxias debido a la expansión del Universo.
        <br><br>
        ◉ La edad del Universo depende de la tasa de expansión medida por la constante de Hubble.
        <br><br>
      </section>
      <section class="calculos">
        <h2>Solución</h2>
        <p>a) La edad del universo por cada constante de Hubble dada:<br><br>
          (a) Para una constante de Hubble de 50 km/s/Mpc, la edad del Universo sería t = 1/H = 1/(50 km/s/Mpc).
          <br><br>(b) Para una constante de Hubble de 75 km/s/Mpc, la edad del Universo sería t = 1/H = 1/(75 km/s/Mpc).
          <br><br>(c) Para una constante de Hubble de 100 km/s/Mpc, la edad del Universo sería t = 1/H = 1/(100 km/s/Mpc).</p>
        <button onclick="calcularEdadUniverso(50);">Calcular a</button>
        <button onclick="calcularEdadUniverso(75);">Calcular b</button>
        <button onclick="calcularEdadUniverso(100);">Calcular c</button>
      </section>
      
      
      <section class="resultado">
        <h2>Resultado:</h2>
        <div id="resultadoA"></div>
      </section>
    </section>
    <footer class="pie">
     Creative Commons versión 3.0 SciSoft 2023
    </footer>
  </section>

  <script>
    function calcularEdadUniverso(constanteHubble) {
      const edadUniverso = 1 / (constanteHubble / 1000); // La constante de Hubble está en km/s/Mpc, por lo que se divide por 1000 para convertirla a km/s/pc
      const resultado = `La edad del universo es de aproximadamente ${edadUniverso.toFixed(2)} miles de millones de años.`;
      document.getElementById("resultadoA").innerHTML = resultado;
    }
  </script>
</body>
</html>
