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

    <article id='Services'>
      <h1>Our Services</h1>
      <br>
      <div class="clearfix">
        <h2>Basic Obedience Training</h2>
        <img class="float-left" src="media/training.jpg" style="max-width:300px;" />
        <p>Basic obedience training for dogs & puppies where they learn how to obey simple commands such as sit, stay, come and others. Ideal for young puppies and disobedient dogs.</p>
        <br>
        <p class="cap">Starting from $70 per 2 hour sessions</p>
        <div class="centerspan"> <a href="service.php" class="button3">View Details</a></div>
      </div>

      <div class="clearfix">
        <h2>Further Obedience Training</h2>
        <img class="float-left" src="media/dawg2.jpg" style="max-width:300px;" />
        <p> Advanced obedience training for dogs inwhich they learn complex instructions such as protection/guarding (for properties or homes), agility training and flyball.</p>
        <p class="cap">Starting from $85 per 2 hour sessions</p>
        <div class="centerspan"><a href="service2.php" class="button3">View Details</a></div>

      </div>
      <div class="clearfix">
        <h2>Specific Behaivoural Training</h2>
        <img class="float-left" src="media/training2.png" style="max-width:300px;" />
        <p>Dog behaivoural training specialising in aggressive dogs. Aggression training varies in dog breeds. Other specific trainings include human & animal rescue aswell as bull breeds specific training. Discalimer: Picture shown is for comedic effect and not a specific behaivoural training. </p>
        <p class="cap">Starting from $100 per 2 hour sessions</p>
        <div class="centerspan"><a href="service3.php" class="button3">View Details</a></div>
        <br>


      </div>




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
