<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practice</title>
</head>
<body>

<?php


// ------Varriables------//



// $neme = "Nure Kamal Mithu";
// $city = "Lakshmipur";
// $liveIn = "Dhaka";


// echo $name

//------- Numbers------//



// $father = 50;
// $dada = 80;
// $son= $dada - $father;
// $mother = 40;
// $dadi= $son + $mother;

// echo $son

// echo $dadi

// $father++;

// echo $daughter = (25+3)/6+8;

// echo pi();





//------------- Array---------------//

// $array = array("Nure Kamal Mithu","Dhaka","PHP");
// $array2 = array("Lakshmipur", "Cumilla", "N.gonj");
// $array3 = array ("DU", "Dhaka COllege", "Jagannath");

// echo $array[2];


$array2 = ["Lakshmipur", "Cumilla", "N.gonj"];
$array3 = ["DU", "Dhaka COllege", "Jagannath"];

// echo $array3[1];

// $mergedArray = array_merge($array2,$array3);
// //  echo "<pre>";
// print_r ($mergedArray);



	$AssociativeArray = array(
					'name' => 'Mithu',
					'city'=>'N.gonj',
					'fav'=>'Javascript'
				);

		$AssociativeArray['city'] = 'Pabna';

        // echo "<pre>";
		print_r($AssociativeArray);
        echo $AssociativeArray['fav'];
        




        	// Mulit-Dimensional Array

		$multiDimensionalArray = array(
			'key_one' => array('name' => 'Pobitro Raj','City' => 'Dhaka', 'likes' => 'WordPress'),
			'key_two' => array('name' => 'Shalihin', 'city' => 'Noakhali', 'likes' => 'Money'),
			'key_three' => array('name'=> 'Tamim', 'city' => 'Barishal', 'likes' => 'Birani')
		);



        	// echo $multiDimensionalArray[0][2];
		echo "<pre>";
		print_r($multiDimensionalArray);

        echo $multiDimensionalArray['key_two']['likes'];
        



        
        //------------ Loop--------------//
        
      
		for($i = 1; $i < 100; $i++ ) {

			echo $i . "</br>";
        }
        

            for ($x = 0; $x <= 10; $x++) {
                echo "my number is- $x <br>";
        } 

	
?>


    
</body>
</html>
