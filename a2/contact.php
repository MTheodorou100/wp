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
      <h1>Contact Us</h1>
      <!-- Creative Commons image sourced from https://pixabay.com/en/maintenance-under-construction-2422173/ and used for educational purposes only -->
      <div class="container">


        <form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php" method="post">

          <label for="fname">Name</label>
          <input type="text" id="name" name="name" placeholder="Your full name..." required>

          <label for="email">E-mail</label>
          <input type="text" id="email" name="email" placeholder="Your email..." required>

          <label for="phone">Phone Number</label>
          <input type="text" id="phone" name="phone" placeholder="Your Phone Number..." required>

          <label for="message">Subject/Message</label>
          <textarea id="message" name="message" placeholder="......" style="height:200px" required></textarea>

          <input type="submit" name="formSubmit" value="Submit">

        </form>


      </div>
      <h3>Or you can call us as!</h3>
      <p class="center"><img src="media/phoney.png" width="25" height="25"> 0435 555 646</p>
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
