<?php
session_start();
include('tools.php');

error_reporting(E_ALL ^ E_NOTICE);



if (isset($_POST['cancel'])) {
    unset($_SESSION['cart']);
    unset($_SESSION['checkout']);
    unset($_SESSION['receipt']);
    header("Location: services.php");
    $_SESSION['cartcount'] = 0;

}

?>



<?php

top_module("Assignment 3 - Checkout");?>

   <article id='Checkout'>
      <h1>Checkout</h1>
       <div class="container">


           <form action="receipt.php" method="post">

               <label for="name">Name</label>
               <input type="text" id="name" name="name" placeholder="Your full name..." required>

               <label for="email">E-mail</label>
               <input type="email" id="email" name="email" placeholder="Your email..." required>

               <label for="address">Address</label>
               <input type="text" id="address" name="address" placeholder="Your Address..." required>

               <label for="phone">Mobile Number</label>
               <input type="text" id="phone" name="phone" placeholder="Your Phone Number..." required>

               <label for="card">Credit Card (all one word)</label>
               <input type="text" id="card" name="card" placeholder="Your credit card number" required>

               <label for="card">Card Expiry Date</label>
               <br>
               <input type="date" id="date" name="date" placeholder="" required>
<br>

               <input type="submit" name="formSubmit" value="Submit">

           </form>


       </div>





       <div class=centerspan> <p>Review sessions to be ordered here</p></div>
       <table>
           <tr>
               <th>Product ID</th>
               <th>Training type</th>
               <th>Sessions</th>
               <th>Price</th>
           </tr>

       <?php

       for( $i = 0; $i<$_SESSION['cartcount']; $i++){
           echo "<tr>";
           echo "<td>".$_SESSION['cart'][$id+$i]['id']."</td>";
           echo "<td>".$_SESSION['cart'][$id+$i]['oid']."</td>";
           echo "<td>".$_SESSION['cart'][$id+$i]['qty']."</td>";
           echo "<td>$".number_format($sum[$i]=$_SESSION['cart'][$id+$i]['qprice']*$_SESSION['cart'][$id+$i]['qty'], 2,'.', '')."</td>";
           echo "</tr>";
       }
       echo "<tr>";
       echo "<td></td>";
       echo "<td></td>";
       echo "<td></td>";
       echo "<td><b>$".number_format(array_sum($sum),2,'.','')."</b></td>";
       echo "</tr>";


       ?>
       </table>
       <div class=centerspan> <form action=cart.php method=POST>
               <button type=submit id=cancel name=cancel class=button4>Clear Cart</button >
           </form></div>




    </article>



<?php
end_module();
CustomDebug();
?>