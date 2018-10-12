
<?php
   if( $_POST["name"] || $_POST["age"] || $_POST["gender"] ) {
      if (preg_match("/[^A-Za-z'-]/",$_POST['name'] )) {
         die ("invalid name and name should be alphanumeric characters");
      }
      echo "Welcome ". $_POST['name']. "<br />";
      echo "You are ". $_POST['age']. " years old.";
    echo "You are a ". $_POST['gender'];
      
      exit();
   }
?>
