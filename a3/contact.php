<?php
session_start();
include('tools.php');

?>

<?php

top_module("Assignment 3 - Contact Us");?>

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


<?php
end_module();
CustomDebug();
?>