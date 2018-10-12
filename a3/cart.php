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


if (isset($_POST['submit'], $_POST['id'], $_POST['qty'], $_POST['oid'], $_POST['qprice'])) {
    if ($_POST['qty'] > 0) {

        if ($_POST['oid'] == $records[0][1] || $_POST['oid'] == $records[1][1] || $_POST['oid'] == $records[2][1]) {
            if ($_POST['qprice']== $records[0][5]||$_POST['qprice']==$records[1][5]||$_POST['qprice']== $records[2][5]){
                $_SESSION['cart'][$id + $_SESSION['cartcount']]['id'] = $_POST['id'];
                $_SESSION['cart'][$id + $_SESSION['cartcount']]['oid'] = $_POST['oid'];
                $_SESSION['cart'][$id + $_SESSION['cartcount']]['qty'] = $_POST['qty'];
                $_SESSION['cart'][$id + $_SESSION['cartcount']]['qprice'] = $_POST['qprice'];

                $_SESSION['cartcount']++;
            }

        }
    }
}



$sum = array();

top_module("Assignment 3 - Cart"); ?>

    <article id='Cart'>
        <h1>Cart</h1>
        <div class=centerspan><p>Review and place orders for selected services</p></div>

        <table>
            <tr>
                <th>Product ID</th>
                <th>Training type</th>
                <th>Sessions</th>
                <th>Price</th>
            </tr>

            <?php

            for ($i = 0; $i < $_SESSION['cartcount']; $i++) {
                echo "<tr>";
                echo "<td>" . $_SESSION['cart'][$id + $i]['id'] . "</td>";
                echo "<td>" . $_SESSION['cart'][$id + $i]['oid'] . "</td>";
                echo "<td>" . $_SESSION['cart'][$id + $i]['qty'] . "</td>";
                echo "<td>$" . number_format($sum[$i] = $_SESSION['cart'][$id + $i]['qprice'] * $_SESSION['cart'][$id + $i]['qty'], 2, '.', '') . "</td>";
                echo "</tr>";
            }
            echo "<tr>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td><b>$" . number_format(array_sum($sum), 2, '.', '') . "</b></td>";
            echo "</tr>";


            ?>

        </table>

        <div class=centerspan>
            <form action=cart.php method=POST>
                <button type=submit id=cancel name=cancel class=button4>Clear Cart</button>
            </form>

            <form action=checkout.php method=POST>
                <?php
                for ($i = 0; $i < $_SESSION['cartcount']; $i++) {

                    echo "<input type=hidden id=id name=id value=" . $_SESSION['cart'][$id + $i]['id'] . ">";
                    echo "<input type=hidden id=oid name=oid value=" . $_SESSION['cart'][$id + $i]['oid'] . ">";
                    echo "<input type=hidden id=qty name=qty value=" . $_SESSION['cart'][$id + $i]['qty'] . ">";
                    echo "<input type=hidden id=qprice name=qprice value=" . $_SESSION['cart'][$id + $i]['qprice'] . ">";

                }
                ?>
                <button type=submit id=name= class=button4>Proceed to Checkout</button>
            </form>
        </div>



    </article>


<?php
end_module();
CustomDebug();
?>