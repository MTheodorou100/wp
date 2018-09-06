<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset="utf-8">
  <title>Assignment 2</title>

  <!-- Keep wireframe.css for debugging, add your css to style.css -->
  <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
  <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
  <script src='../wireframe.js'></script>
  <style>
    @import url('https://fonts.googleapis.com/css?family=Comfortaa');
    @import url('https://fonts.googleapis.com/css?family=Montserrat');
</style>
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
    <article id='Contact'>
      <h1>Login</h1>
      <!-- Creative Commons image sourced from https://pixabay.com/en/maintenance-under-construction-2422173/ and used for educational purposes only -->
      <div class="Login">
        <form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php" method="post">
          <div class="container">
            <label for="email"><b>E-mail</b></label>
            <input type="text" placeholder="Enter E-mail" name="email" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
            <br>
            <button type="submit" class="button4">Login</button>
            <br>
            <span class="psw"> Forgot <a href="#">password?</a></span>
          </div>
        </form>


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
