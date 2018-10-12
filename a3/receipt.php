<?php
session_start();
include('tools.php');


$date=date("m/d/Y");
$monthdate = date('m/d/Y', strtotime("1 month"));
if (isset($_POST['name'],$_POST['email'],$_POST['address'],$_POST['phone'],$_POST['card'],$_POST['date'])){

    if(preg_match("/^[a-zA-Z\'\-\040]+$/", $_POST['name'])){
        $_SESSION['checkout']['name']=$_POST['name'];
    }


    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $_SESSION['checkout']['email'] = $_POST['email'];
    }

    if (preg_match("/^[a-zA-Z0-9\'\n\,\.\/\-\040]+$/", $_POST['address'])) {
        $_SESSION['checkout']['address'] = $_POST['address'];
    }

    if (preg_match("/^[0-9\+\040]+$/", $_POST['phone'])) {
        $_SESSION['checkout']['phone'] = $_POST['phone'];
    }


    if (preg_match("/^(?:4[0-9]{12}(?:[0-9]{3})?|[25][1-7][0-9]{14}|6(?:011|5[0-9][0-9])[0-9]{12}|3[47][0-9]{13}|3(?:0[0-5]|[68][0-9])[0-9]{11}|(?:2131|1800|35\d{3})\d{11})+$/", $_POST['card'])) {
        $_SESSION['checkout']['card'] = $_POST['card'];
    }


if ($_POST['date'] > $monthdate) {
    $_SESSION['checkout']['date'] = $_POST['date'];
}

}
else{
    header("Location: checkout.php");
}
?>

<html>
<head>
    <meta charset="utf-8">
    <title>Assignment 3 - Order Receipt</title>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Comfortaa');
        .centerspan {
            text-align: center;
            margin: 40px auto;

        }
        .button3 {
            font-family: 'Arial';
            font-family: Comfortaa, cursive;
            background-color: #36ddf1;
            color: white;
            border-radius: 4px;
            padding: 20px 30px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            font-weight: 900;
            margin: 4px 10px;
            text-shadow: 2px 2px 4px #d6f7fc;
            -webkit-transition-duration: 0.2s;
            transition-duration: 0.2s;

        }
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, .15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td{
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .rtl table {
            text-align: right;
        }

        .rtl table tr td:nth-child(2) {
            text-align: left;
        }
    </style>
</head>

<body>
<div class="invoice-box">
    <table cellpadding="0" cellspacing="0">
        <tr class="top">
            <td colspan="2">
                <table>
                    <tr>
                        <td class="title">
                            <img src="media/log.png" style="width:100%; max-width:300px;">
                        </td>

                        <td>
                            <b> Invoice #: 123</b><br>
                            <?php


if (isset($_SESSION['checkout']['name'], $_SESSION['checkout']['email'],$_SESSION['checkout']['address'],$_SESSION['checkout']['phone'],$_SESSION['checkout']['card'],$_SESSION['checkout']['date'] )) {
    $endOfCycle = date('m/d/Y', strtotime("+30 days"));
    echo "Created: " . $date . "<br>";
    echo "Due: " . $endOfCycle . "<br>";
                            }

                            else{
                                header('Location: services.php');
                            }
                            ?>

                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="information">
            <td colspan="2">
                <table>
                    <tr>
                        <td>
                            <?php
                            echo "<b>Address: </b><br>";
                            echo $_SESSION['checkout']['address'];
                            ?>
                        </td>

                        <td>
                            <b> Name & Email:</b><br>
                            <?php
                            echo $_SESSION['checkout']['name']."<br>";
                            echo $_SESSION['checkout']['email']."<br>";
                            ?>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="heading">
            <td>
                Payment Method
            </td>

            <td>
                Card #
            </td>
        </tr>

        <tr class="details">
            <td>
               <b> Credit Card</b>
            </td>

            <td>
                <?php
               echo"<b>".$_SESSION['checkout']['card']."</b>";
                ?>
            </td>
<tr class ="details">
            <td>
                Card Expiry Date
            </td>

            <td>
                <?php
                echo $_SESSION['checkout']['date'];
                ?>
            </td>
        </tr>

        </tr>

        <tr class="heading">
            <td>
                Item
            </td>

            <td>
                Price
            </td>

            <td
        </tr>
        </tr>


                <?php
                $sum = array();
                for ($i = 0; $i < $_SESSION['cartcount']; $i++) {
                echo "<tr  class='item'>";
                echo "<td>";
                echo $_SESSION['cart'][0+$i]['oid'];
                echo "</td>";
                    echo "<td>$" . number_format($sum[$i] = $_SESSION['cart'][0 + $i]['qprice'] * $_SESSION['cart'][0+ $i]['qty'], 2, '.', '') . "</td>";
                    echo "  </tr>";
                }
                echo "<tr>";
                echo "<td><b>Total amount</b></td>";
                echo "<td><b>$" . number_format(array_sum($sum), 2, '.', '') . "</b></td>";
                echo "</tr>";




$sum = array();
                for( $i = 0; $i<$_SESSION['cartcount']; $i++) {
                    $_SESSION['receipt']['date'] = date("Y/m/d");
                    $_SESSION['receipt']['name'] = $_POST['name'];
                    $_SESSION['receipt']['email'] = $_POST['email'];
                    $_SESSION['receipt']['mobile'] = $_POST['phone'];
                    $_SESSION['receipt']['address'] = $_POST['address'];
                    $_SESSION['receipt']['iid'] = $_SESSION['cart'][0+$i]['id'];
                    $_SESSION['receipt']['oid'] = $_SESSION['cart'][0+$i]['oid'];
                    $_SESSION['receipt']['qty'] = $_SESSION['cart'][0+$i]['qty'];
                    $_SESSION['receipt']['qprice'] = $_SESSION['cart'][0+$i]['qprice'];
                    $_SESSION['receipt']['subtotal'] = number_format($sum[$i] = $_SESSION['cart'][$id + $i]['qprice'] * $_SESSION['cart'][$id + $i]['qty'], 2, '.', '');

                    $records = array();

                    $fp = fopen("orders.txt","a");
                    flock($fp, LOCK_EX);
                    fputcsv($fp, $_SESSION['receipt'], "\t");
                    foreach ($records as $record)
                        fputcsv($fp, $record, "\t");
                    flock($fp, LOCK_UN);
                    fclose($fp);

                }


                if (isset($_POST['cancel'])) {
                    unset($_SESSION['cart']);
                    unset($_SESSION['checkout']);
                    unset($_SESSION['receipt']);
                    header("Location: services.php");
                    $_SESSION['cartcount'] = 0;

                }


                ?>




    </table>
</div>
<div class=centerspan>            <form action=receipt.php method=POST>
        <button type=submit id=cancel name=cancel class=button3>Clear Cart</button></div>
</body>
</html>