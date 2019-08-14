<?php
$pizzaSize = $_POST['PizzaSize'];
$topping = $_POST['Topping'];
$sauceT = $_POST['Sauce'];
$sauce ="";
$price = 0;
$size = "";


switch($pizzaSize)
{
 	case "smallPizza":
 	$size = "Small Sized Pizza (6 Inch)";
 	$price = $price + 10.0;
 	for($i = 0; $i < count($topping); $i++)
 	{
 		switch($topping[$i])
 		{
 			case "Prawn":
 			$price = $price + 5.0;
 			break;
 			case "Chicken":
 			$price = $price + 5.0;
 			break;
 			case "Beef":
 			$price = $price + 8.0;
 			break;		
 		}
}
 		break;
 		case "medPizza":
 		$size = "Medium Sized Pizza (9 Inch)";
 		$price = $price + 20.5;
 		for($i = 0; $i < count($topping); $i++)
 	{
 		switch($topping[$i])
 		{
 			case "Prawn":
 			$price = $price + 5.0;
 			break;
 			case "Chicken":
 			$price = $price + 5.0;
 			break;
 			case "Beef":
 			$price = $price + 8.0;
 			break;		
 		}
}
 		break;

 		case "largePizza":
 		$size = "Large Sized Pizza (12 Inch)";
 		$price = $price + 30.0;
 		for($i = 0; $i < count($topping); $i++)
 	{
 		switch($topping[$i])
 		{
 			case "Prawn":
 			$price = $price + 5.0;
 			break;
 			case "Chicken":
 			$price = $price + 5.0;
 			break;
 			case "Beef":
 			$price = $price + 8.0;
 			break;		
 		}
}
 		break;
 }

switch ($sauceT)
{
	case "sa":
	$sauce = "Spicy Asian Sauce";
	break;
	case "bbq":
	$sauce = "BBQ Sauce";
	break;
	case "rc":
	$sauce = "Royal Cheese Sauce";
	break;
}
echo '<br>';
echo $size . " / " . $sauce ." / " . implode(" + ",$topping);
echo '<br>';
echo "Total : RM" . $price;