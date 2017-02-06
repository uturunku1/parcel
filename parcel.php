<?php

    class Parcel
{
    private $length;
    private $width;
    private $height;
    private $weight;

    function __construct($length, $width, $height, $weight) {
      $this->length= $length;
      $this->width = $width;
      $this->height = $height;
      $this->weight = $weight;
    }

    function getLength(){
      return $this->length;
    }

    function getWidth(){
      return $this->width;
    }

    function getHeight(){
      return $this->height;
    }

    function getWeight(){
      return $this->weight;
    }
}

$length = $_GET["length"];
$width = $_GET["width"];
$height = $_GET["height"];
$weight = $_GET["weight"];


$parcel = new Parcel($length, $width, $height, $weight);
$yourWeight = $parcel->getWeight();

function getDim($parcel){
  $dim = $parcel->getLength() . "x" . $parcel->getWidth() . "x" . $parcel->getHeight();
  return $dim;
}

function getVol($parcel){
  $vol = $parcel->getLength() * $parcel->getWidth() * $parcel->getHeight();
  return $vol;
}

function getPrice($parcel, $yourWeight){
  $vol = getVol($parcel);
  $price = $vol * $yourWeight;

  // $price = $vol * $parcel->getWeight();
  return $price;
}


?>

<!DOCTYPE html>
<html>
<head>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
    <title>My CD Store</title>
</head>
<body>
    <div class="container">
      <?php
        echo "<p>Your Dimensions are: " . getDim($parcel);
        echo "<p>Your Weight is: " . $yourWeight;
        echo "<p>Your Volume is: " . getVol($parcel);
        echo "<p>Your Price is: $" . getPrice($parcel, $yourWeight);
      ?>
    </div>
</body>
</html>
