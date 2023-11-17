<?php
//Question 1
/*
1/ 16
2/ 
*/
//Question 2 


//1


function fibonacci($n) {
    $fib = array();
    $fib[0] = 0;
    $fib[1] = 1;
    
    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }
    
    return $fib;
}

$numberOfTerms = 10;
$fibonacciSeries = fibonacci(10);


foreach ($fibonacciSeries as $term) {
    echo $term . " ";
}


//2


function isLeapYear($year) {
    return ($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0);
}


$year = 2024;
if (isLeapYear($year)) {
    echo $year . " is a leap year.";
} else {
    echo $year . " is not a leap year.";
}



//3



function generateUniqueRandomNumbers($min, $max, $count) {
    $range = range($min, $max);
    
    if ($count > ($max - $min + 1)) {
        echo "Cannot generate more unique random numbers than the range allows.";
        return;
    }
    
    $randomNumbers = array();
    
    while ($count > 0) {
        $index = mt_rand(0, count($range) - 1);
        $randomNumbers[] = $range[$index];
        array_splice($range, $index, 1);
        $count--;
    }
    
    return $randomNumbers;
}


$min = 1;
$max = 10;
$count = 5;

$randomNumbers = generateUniqueRandomNumbers($min, $max, $count);

// Print the generated random numbers
foreach ($randomNumbers as $number) {
    echo $number . " ";
}



//4



echo "<table>";
for ($i = 1; $i <= 5; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 5; $j++) {
        echo "<td>" . ($i * $j) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";


//5

function removeDuplicates($sortedList) {
    $length = count($sortedList);
    if ($length <= 1) {
        return $sortedList; 
    }
    
    $result = array();
    $result[] = $sortedList[0]; 
    
    for ($i = 1; $i < $length; $i++) {
        if ($sortedList[$i] != $sortedList[$i - 1]) {
            $result[] = $sortedList[$i]; 
        }
    }
    
    return $result;
}


$sortedList = array(1, 2, 2, 3, 4, 4, 4, 5, 5);
$uniqueList = removeDuplicates($sortedList);


foreach ($uniqueList as $value) {
    echo $value . " ";
}

//6


class Animal {

    public $name;
    

    public function __construct($name) {
        $this->name = $name;
    }

    // دالة لطباعة صوت الحيوان
    public function toString() {
        
    }
}

class Mannak extends Animal {
  

    public function __construct($name) {
        parent::__construct($name);
        
    } 
}


class Cat extends Mannak {
  

    public function __construct($name) {
        parent::__construct($name);
        
    } 
    public function greets() {
        print("Menow");
    }
}
class Dog extends Mannak {
  

    public function __construct($name) {
        parent::__construct($name);
        
    } 
     public function greets() {
        print("woof");
    }
    public function greet($anotherDog) {
        print("woooooof");
    }
}

//Question 3
/*
1/ False
2/ False
3/ True 
4/ False
5/ True
*/ 

?>
