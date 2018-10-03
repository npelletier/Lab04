<?php
  // $items = array("Item 1", "Item 2", "Item 3", "Shipping", "Final Cost");
  //$Price = array(100.00, 10.00, 5.99);
  $shipping = $_POST["Shipping"];
  $shippingCost = 0.00;
  if($shipping=="Overnight")
  {
    $shippingCost=50.00;
  }
  else if($shipping=="3 Day")
  {
    $shippingCost=5.00;
  }
  $username = $_POST["Username"];
  $password = $_POST["Password"];
  echo "Username: " . $username . "<br>";
  echo "Password: " . $password . "<br>";

  echo "<table>";
  echo "<th><td>&nbsp</td><td><b>Quantity</b></td><td><b>Cost Per Item</b></td><td><b>Sub Total</b></td></th>";
  // for($i=0;i<3;i++)
  // {
  $Item1=$_POST["Item 1"];
  echo "<tr><td>Item 1</td><td>" . $Item1 . "</td><td>$100.00</td><td>$" . $Item1*100.00 . "</td></tr>";
  $Item2=$_POST["Item 2"];
  echo "<tr><td>Item 2</td><td>" . $Item2 . "</td><td>$100.00</td><td>$" . $Item2*10.00 . "</td></tr>";
  $Item3=$_POST["Item 3"];
  echo "<tr><td>Item 3</td><td>" . $Item3 . "</td><td>$100.00</td><td>$" . $Item3*5.00 . "</td></tr>";
  echo "<tr><td>Shipping Cost</td><td>"."&nbsp"."</td><td>" . $shipping . "</td><td>$" . $shippingCost . "</td></tr>";
  echo "<tr><td>Total</td><td>" . $_POST["Item 3"] . "</td><td>$100.00</td><td>" . $_Post["Item 3"]*5.00 . "</td></tr>";


  // }
  echo "</table>";
?>
