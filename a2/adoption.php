<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset="utf-8">
  <title>Assignment 2</title>

  <!-- Keep wireframe.css for debugging, add your css to style.css -->
  <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
  <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
  <script src='../wireframe.js'></script>

</head>

<body>
  <a href="login.php" class="button button2">Login/Logout</a>
  <header>
    <div><img src="media/ozdog.png" height="400" width="500"></div>
  </header>
  <br>
  <nav>
    <div><a href="index.php" class="button button1">Home/About us</a><a href="services.php" class="button button1">Our Services</a><a href="adoption.php" class="button button1">Dogs For Adoption</a><a href="rescue.php" class="button button1">Rescue/Intake</a><a href="contact.php" class="button button1">Contact Us</a></div>
  </nav>
  <br>

  <main>
    <article id='Website Under Construction'>
      <h1>Section under construction :(</h1>
      <img class="center" src="media/hard.jpg" />
    </article>
  </main>

  <footer>
    <div>&copy;<script>
        document.write(new Date().getFullYear());

      </script> Michael Theodorou - s3722979</div>
    <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
    <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
  </footer>
<script>
    document.getElementById("wireframecss").disabled=true;
</script>
</body>

</html>
