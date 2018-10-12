<?php
session_start();
include('tools.php');




?>

<?php

top_module("Assignment 3 - Services");?>

<?php

   echo "<script src='css/script.js'></script>
    <article id='Services'>
    
      <h1>Our Services</h1>
      <br>
      <div class=clearfix>
        <h2>".$records[0][2]."</h2>
        <img class=float-left src=".$records[0][4]." style=max-width:300px; />
        <p>Basic obedience training for dogs & puppies where they learn how to obey simple commands such as sit, stay, come and others. Ideal for young puppies and disobedient dogs.</p>
        <br>
        <p class=cap>Starting from $".$records[0][5]." per 2 hour sessions</p>
        <div class=centerspan> <a href=service.php?id=001 class=button3>View Details</a></div>
      </div>";

    echo  "<div class=clearfix>
        <h2>".$records[1][2]."</h2>
        <img class=float-left src=".$records[1][4]." style=max-width:300px; />
        <p> Advanced obedience training for dogs inwhich they learn complex instructions such as protection/guarding (for properties or homes), agility training and flyball.</p>
        <p class=cap>Starting from $".$records[1][5]." 2 hour sessions</p>
        <div class=centerspan><a href=service.php?id=002 class=button3>View Details</a></div>

      </div>";

echo      "<div class=clearfix>
        <h2>".$records[2][2]."</h2>
        <img class=float-left src=".$records[2][4]." style=max-width:301px; />
        <p>Dog behaivoural training specialising in aggressive dogs. Aggression training varies in dog breeds. Other specific trainings include human & animal rescue aswell as bull breeds specific training. Disclaimer: Picture shown is for comedic effect and not a specific behaivoural training. </p>
        <p class=cap>Starting from $".$records[2][5]." 2 hour sessions</p>
        <div class=centerspan><a href=service.php?id=003 class=button3>View Details</a></div>
        <br>


      </div>




    </article>";
?>
<?php
end_module();
CustomDebug();
?>