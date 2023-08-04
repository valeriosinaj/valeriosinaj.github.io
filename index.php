<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coming-Soon Page</title>
  <script src="./javaS.js"></script>
  <link rel="icon" type="image/png" href="vale.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="stile.css">
</head>
<body>


  <canvas id="canvas" class="nascosto">Canvas is not supported in your browser.</canvas>


  <div class="container">

    <header>
      <div class="hero">
        <h1>Ciao Valerio</h1>
        <hr>
        <p id="launch"></p>
      </div>
    </header>
    <h2 id="headline" class="srp">C'è una sorpresa per te!<br>Verrà rivelata al termine del countdown.</h2>
    <div id="countdown">
      <ul>
        <li><span id="giorni"></span>Giorni</li>
        <li><span id="ore"></span>Ore</li>
        <li><span id="minuti"></span>Minuti</li>
        <li><span id="secondi"></span>Secondi</li>
      </ul>
    </div>
  </div>

<div class="video-background">
  <div class="video-wrapper">
      <video autoplay muted loop id="myVideo">
          <source src="bg.mp4" type="video/mp4">
      </video>
  </div>
</div>

</body>
</html>