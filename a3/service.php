<?php
session_start();
include('tools.php');



top_module("Assignment 3 - Service");

?>

<article id='Service'>
 
 <?php
if ($_GET['id']==$records[0][0]){
 
 
 echo "<h1>".$records[0][2]."</h1>";
 
 echo "<br><img class=center src=".$records[0][4]." /><br>
       <div class=clearfix><p>".$records[0][3]."</p>";
 
 echo "<p class=cap>Starting from $".$records[0][5]." per 2 hour sessions</p>";
 
echo "  <div class=container> <form action=cart.php method=POST> <button id=testsub onclick=subtract();totalB(); type=button>-</button>
                    <input type=number name=qty id=qty value=1 min=1 max=10 placeholder=quantity />
                    <button id=testadd onclick=add();totalB(); type=button>+</button>
                      <input type=hidden id=id name=id value=".$records[0][0].">
                      <input type=hidden id=oid name=oid value=".$records[0][1].">
                      <input type=hidden id=qprice name=qprice value=".$records[0][5].">
                    <br>
                    Total Price
                    <br>
                    $<input type=number id=price value=70 min=70 max=700 placeholder=70 step=70>
                    <br>
                    <button type=submit id=submit name=submit class=button4>Add to Cart</button >
</form></div>
      </div>";
 




}elseif ($_GET['id']==$records[1][0]){

  echo "<h1>".$records[1][2]."</h1>";
 
 echo "<br><img class=center src=".$records[1][4]." /><br>
       <div class=clearfix><p>".$records[1][3]."</p></div>";
 
 echo "<p class=cap>Starting from $".$records[1][5]." per 2 hour sessions</p>";
 
echo "<br>  <div class=container> <form action=cart.php method=POST><button id=testsub onclick=subtract();totalF(); type=button>-</button>
                    <input type=number name=qty id=qty value=1 min=1 max=10 placeholder=quantity />
                    <button id=testadd onclick=add();totalF(); type=button>+</button>
                      <input type=hidden id=id name=id value=".$records[1][0].">
                      <input type=hidden id=oid name=oid value=".$records[1][1].">
                      <input type=hidden id=qprice name=qprice value=".$records[1][5].">
                    <br>
                    Total Price
                    <br>
                    $<input type=number id=price value=85 min=85 max=850 placeholder=85 step=85>
                    <br>
                    <button type=submit id=submit name=submit class=button4>Add to Cart</button >
</form></div>";




} elseif ($_GET['id']==$records[2][0]){
   echo "<h1>".$records[2][2]."</h1>";
 
 echo "<br><img class=center src=".$records[2][4]." ><br>
       <div class=clearfix><p>".$records[2][3]."</p></div>";
 
 echo "<p class=cap>Starting from $".$records[2][5]." per 2 hour sessions</p>";
 
echo "<br>  <div class=container> <form action=cart.php method=POST> <button id=testsub onclick=subtract();totalS(); type=button>-</button>
                    <input type=number name=qty id=qty value=1 min=1 max=10 placeholder=quantity />
                    <button id=testadd onclick=add();totalS(); type=button>+</button>
                      <input type=hidden id=id name=id value=".$records[2][0].">
                      <input type=hidden id=oid name=oid value=".$records[2][1].">
                      <input type=hidden id=qprice name=qprice value=".$records[2][5].">
                    <br>
                    Total Price
                    <br>
                    $<input type=number id=price value=100 min=100 max=1000 placeholder=100 step=100>
                    <br>
                    <button type=submit id=submit name=submit class=button4>Add to Cart</button >
</form></div>
      ";



} 
 else {
  
header('Location: services.php');

 
 
 
 
 }
 
 ?>
 

 
 
    </article>



<?php
end_module();
CustomDebug();
?>