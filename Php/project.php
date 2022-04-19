<?php
// echo "<script>input=prompt('Enter your name !';;</script>";
echo "========================================================================<br>";
echo "========================================================================<br>";
echo "========================== .  Ticket Reservation System .   ========================<br>";
echo "========================================================================<br>";
echo "========================================================================<br><br><br>";



echo '<form method="post" action="">
Enter Number of Visitors  : <input type="text" name="value"><input type="submit"></form>';
echo "You Entered   =  ". $_POST['value'];
$number = $_POST['value'];

$visitors_names   = array();
$visitors_age     = array();
$visitors_classes = array();
$visitors_price   = array();
$totalPrice;

for( $i = 0; $i<$number; $i++){

    echo "Enter Name of Visitor # ". $i+1;   
    $visitors_names[i] = readline();
    echo "Enter Age of Visitor # ". $i+1;   
    $visitors_age[i] = readline();
    echo "Enter Class of Visitor # ". $i+1;   
    $visitors_classes[i] = readline();

    // Find Tickets Prices based on Class
    if($visitors_classes[i] == 'A'){
        $visitors_price[i] = 1500 ;
    }
    else if($visitors_classes[i] == 'B'){
        $visitors_price[i] = 1200 ;
    }
    else if($visitors_classes[i] == 'C'){
        $visitors_price[i] = 800 ;
    }

    // If age of Visitor is Less than 18
    if($visitors_age[i] < 18){
        $visitors_price[i] -= $visitors_price[i];
    }

    // add ticket price to total ticket price
    $totalPrice += $visitors_price[i];


}

echo "========================================================================";
echo "========================================================================";
echo "===========================Vistor Report================================";
echo "========================================================================";
echo "========================================================================";

for($i = 0; $i< count($visitors_names); $i++){
    echo " ID \t\t\t" . " Visitor Name \t\t\t" ."Visitor Age \t\t\t". "Class \t\t\t" . "Price \t\t\t";
    echo "". $i+1 ."\t\t\t". $visitors_names[i] . "\t\t\t" . $visitors_age ."\t\t\t". $visitors_classes . "\t\t\t" . $visitors_price . "";
}

echo "Total Price of All Tickets  :" . array_sum($visitors_price);
echo "Thank you for using Our Ticket Reservation System";


?>



