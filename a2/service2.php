<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset="utf-8">
  <title>Assignment 2</title>

  <!-- Keep wireframe.css for debugging, add your css to style.css -->
  <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
  <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
  <script src='../wireframe.js'></script>
   <script src='script.js'></script>

</head>

<body>
  <a href="../login.php" class="button button2">Login/Logout</a>
  <header>
    <div><img src="media/ozdog.png" height="400" width="500"></div>
  </header>
  <br>
  <nav>
    <div><a href="index.php" class="button button1">Home/About us</a><a href="services.php" class="button button1">Our Services</a><a href="adoption.php" class="button button1">Dogs For Adoption</a><a href="rescue.php" class="button button1">Rescue/Intake</a><a href="contact.php" class="button button1">Contact Us</a></div>
  </nav>
  <br>
  <main>

    <article id='Basic Obedience Training'>
 <h1>Further Obedience Training</h1>
      <br>
      <img class="center" src="media/dawg2.jpg" />
       <div class="clearfix">
       
        <p>Your dog will learn further obedience training as well as fun excercises and games such as flyball. Training will further enhance on what the dog has learnt as well as learning useful protection techniques for properties and to the dog's master. Agility training consists of agility courses/obstalces for the dog to overcome to maintain fit, healthy and in ideal shape. </p>

<p>Recommended for anyone who would like to train guard dogs, sporting dogs or have their dog further learn compliance, direction and command. Advanced commands for dogs can include:</p>
        

<ul>
  <li>Shake</li>
  <li>Growl</li>
  <li>Stand</li>
    <li>Fetch</li>
</ul> 
        <br>
       <p class="cap">Starting from $85 per 2 hour sessions</p>

      </div>
      <h4>Fill out the contact form below for </h4>
      <div class="container">
      <form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php" method="post">

          <label for="fname">Name</label>
          <input type="text" id="name" name="name" placeholder="Your full name..." required>

          <label for="email">E-mail</label>
          <input type="text" id="email" name="email" placeholder="Your email..." required>

          <label for="phone">Phone Number</label>
          <input type="text" id="phone" name="phone" placeholder="Your Phone Number..." required>
          <label for="message">Your Dog's Breed</label>
        
        <input type="text" id="breed" name="dogbreed" placeholder="Breed of dog to be trained..." required>
        
        <label for="message">Your Address</label>
        <input type="text" id="address" name="address" placeholder="Your address for booking..." required>
          
           <label for="message">Sessions for Booking</label>
        <br>
                  <input type="number" name="quantity" min="1" max="100"required>
<br>
<button type="submit" class="button4">Submit Order</button>

        </form>
</div>
      <h3>A response should be sent within a few days</h3>
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
