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
    <div><a href="index.php" class="button1">Home/About us</a><a href="services.php" class="button1">Our Services</a><a href="adoption.php" class="button1">Dogs For Adoption</a><a href="rescue.php" class="button1">Rescue/Intake</a><a href="contact.php" class="button1">Contact Us</a></div>
  </nav>
  <br>
  <main>
    <article id='About1'>

      <h1>About us</h1>
      <div class="clearfix">
        <img class="float-right" style="max-width:600px;" src='media/puppy-training.jpg' alt='Website Under Construction' width="auto" height="auto">
        <p>We are a small team of dedicated dog trainers whose life and passion is to train man's best friend. Growing up with dogs and spending ample time training, feeding and caring for them, we know the ins and outs on what dogs need to become obedient and diligent dogs. Our trainers have raised many puppies of various breeds as well as fully grown dogs with aggressive temprements. We believe that each dog has potential to learn some of the most complex and intricute techniques that can improve not only the lives of their masters but also help them to be more independent. From basic training like sit/stay to sports skills like flyball or even protection training, we believe that every dog as the ability to learn it all and more!</p>
      </div>
      <br>
      <h1>How do we train the dogs?</h1>
      <div class="clearfix">
        <img class="float-left" style="max-width:500px;" src="media/dog.png" />
        <p>Training each dog is a very and methodical process as each dog is different in nature with their own idiosyncrasies. Younger dogs & puppies are trained with treats and various kinds of reward methods whilst older dogs will be trained to snap out of bad habits with methods varying depending on the stubborness of the dog. Dogs with serious behaivoural issues will try to find the underlying problems in the dogs behaivour and the root of the cause.</p>
        <p>Most training sessions will be in-home where one of our members will spend 1-2 hour sessions training the dog/puppy. Recurring weekly sessions may be nessecary for dogs who need consistent behaivoural training. Group obedience sessions can be booked for multiple dogs (that are safe and comfortable around each other). Treats and snacks will be provided by the trainers during training sessions (unless specified to use specific treats). </p>
      </div>
    </article>
  </main>
  <br>
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
