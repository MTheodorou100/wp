<?php
error_reporting(E_ALL ^ E_NOTICE);
$_SESSION['cartcount'];
function top_module($pageTitle) {
  $html = <<<"OUTPUT"
  <!DOCTYPE html>
 <html lang='en'>

<head>
  <meta charset="utf-8">
  <title>$pageTitle</title>

  <!-- Keep wireframe.css for debugging, add your css to style.css -->
    
  <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
  <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
  <script src='../wireframe.js'></script>
     <script src='css/script.js'></script>
  <style>
    @import url('https://fonts.googleapis.com/css?family=Comfortaa');
    @import url('https://fonts.googleapis.com/css?family=Montserrat');

  </style>
</head>

<body>
 <a href="cart.php" class="button button2">Cart</a> <a href="login.php" class="button button2">Login/Logout</a>
  <header>
    <div><img src="media/ozdog.png" height="400" width="500"></div>
  </header>
  <br>
  <nav>
    <div><a href="index.php" class="button1">Home/About us</a><a href="services.php" class="button1">Our Services</a><a href="adoption.php" class="button1">Dogs For Adoption</a><a href="rescue.php" class="button1">Rescue/Intake</a><a href="contact.php" class="button1">Contact Us</a></div>
  </nav>
  <br>
  <main>
OUTPUT;
  echo $html;
}


function end_module() {
  $html = <<<"OUTPUT"
</main>
  <br>
  <footer>
    <div>&copy;<script>
        document.write(new Date().getFullYear());

      </script> Michael Theodorou - s3722979</div>
    <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
    <div> <div>Maintain links to your <a href='services.txt'>services spreadsheet</a> and <a href='orders.txt'>orders spreadsheet</a><br><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>

  </footer>
<script>
    document.getElementById("wireframecss").disabled=true;
</script>
</body>

</html>
OUTPUT;
  echo $html;
}

function CustomDebug(){
    echo "<div class=centerspan>";
    echo "<h3>Custom Debug Module:</h3>";
    echo"<p><b>Cart Session Properties:</b>";
    for ($i = 0; $i < $_SESSION['cartcount']; $i++) {

        echo "<p><b>#".$i."</b>";
        echo " ID: ".$_SESSION['cart'][0 + $i]['id'].",";
        echo " OID: ".$_SESSION['cart'][0 + $i]['oid'].",";
        echo " QTY: ".$_SESSION['cart'][0 + $i]['qty'].",";
        echo " QPRICE: ".$_SESSION['cart'][0 + $i]['qprice'].",";
        echo "</p>";


    }
    echo "<p>";
    echo " CARTCOUNT: ".$_SESSION['cartcount'];
    echo "</p>";

    echo "<p><b>Checkout Details/Properties</b><br>";
    echo "NAME: ".$_SESSION['checkout']['name'];
    echo "<br>";
    echo "EMAIL: ".$_SESSION['checkout']['email'];
    echo "<br>";
    echo "ADDRESS: ".$_SESSION['checkout']['address'];
    echo "<br>";
    echo "PHONE NUMBER: ".$_SESSION['checkout']['phone'];
    echo "<br>";
    echo "CREDIT CARD: ".$_SESSION['checkout']['card'];
    echo "<br>";
    echo "EXPIRY DATE: ".$_SESSION['checkout']['date'];
    echo "<br>";
    echo "</div>";

}



function preShow( $arr, $returnAsString=false ) {
  $ret  = '<pre>' . print_r($arr, true) . '</pre>';
  if ($returnAsString)
    return $ret;
  else 
    echo $ret; 
}

function printMyCode() {
  $lines = file($_SERVER['SCRIPT_FILENAME']);
  echo "<pre class='mycode'>\n";
  foreach ($lines as $lineNo => $lineOfCode)
     printf("%3u: %1s \n", $lineNo, rtrim(htmlentities($lineOfCode)));
  echo "</pre>";
}


function php2js( $arr, $arrName ) {
  $lineEnd="";
  echo "<script>\n";
  echo "  var $arrName = {\n";
  foreach ($arr as $key => $value) {
    echo "$lineEnd    $key : $value";
    $lineEnd = ",\n";
  }
  echo "  \n};\n";
  echo "</script>\n\n";
}
function styleCurrentNavLink( $css ) {
  $here = $_SERVER['SCRIPT_NAME']; 
  $bits = explode('/',$here); 
  $filename = $bits[count($bits)-1]; 
  echo "<style>nav a[href$='$filename'] { $css }</style>";
}

$id =$_GET['id'];
$fp = fopen("services.txt", "r");
flock($fp, LOCK_SH);
$headings = fgetcsv($fp,0,"\t");
while ($aLineOfCells = fgetcsv($fp,0,"\t")) {
    $records[] = $aLineOfCells;
}




?>