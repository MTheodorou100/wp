<?php
session_start();
include('tools.php');

?>

<?php

top_module("Assignment 3 - Login");?>

    <article id='Login'>
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


<?php
end_module();
CustomDebug();
?>