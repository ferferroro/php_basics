<?php
    // echo "Magandang araw!"; 

    // Single line Comment

    # Single line Comment

    /*
        Multi-line
        Comments 
    */


    // 1. Variable & Data types
    /*
        1. dapat may dollar sign
        2. dapat mag start sa letter
        3. alpha numeric [A-z], [0,9] at _
        4. case-sensitive
    */
    // $name = 'Romel';
    // $naME = "Ako'y Masaya!";

    # STRING 

    // String concatenate
    // echo 'Magandang araw sayo '.$name;
    // echo "Magandang araw sayo $name";

    // String Functions
    // echo strlen("Magandang Araw sayo!");
    // echo "<br>";
    // echo strrev("Magandang Araw sayo!");

    # Integer
    // $current_stock = 50;
    // $new_stock = 1;

    // echo $current_stock;
    // echo '<br>';
    // echo $new_stock;
    // echo '<br>';
    // echo $current_stock + $new_stock;

    # Float
    // $current_stock = 50.1;
    // $new_stock = 1.1;

    // echo $current_stock;
    // echo '<br>';
    // echo $new_stock;
    // echo '<br>';
    // echo $current_stock + $new_stock;

    # CASTING
    // $price = 99.99;
    // $casted_price = (string)$price;
    // // echo $price;
    // // echo '<br>';
    // // echo $casted_price;

    // var_dump($casted_price);

    # BOOLEAN
    // $is_active = true; // or false
    // echo $is_active;

    # ARRAYS [Indexed, Associative, Multi-dimensional]
    
    // Indexed
    // $programming_languages = array('PHP', 'Python', 'JavaScript');

    // echo $programming_languages[0];
    // echo '<br>';
    // // update value of array 
    // $programming_languages[0] = 'PhpX';
    // echo $programming_languages[0];


    // Associative 
    // $programming_languages = array(
    //     'PHP' => 'Laravel', 
    //     'Python' => 'Flask', 
    //     'JavaScript' => 'VueJs'
    // );

    // echo $programming_languages['PHP'];
    // // update value 
    // $programming_languages['PHP'] = 'Laravel Updated';
    // echo '<br>';
    // echo $programming_languages['PHP'];


    // Multi-dimensional
    // $programming_languages = array(
    //     array(
    //         'PHP', 
    //         'Python', 
    //         'JavaScript'
    //     ),
    //     array(
    //         'C', 
    //         'C++', 
    //         'C#'
    //     )
    // );

    // echo $programming_languages[1][2];

    // $cars = ['Toyota', 'Hyundai'];
    // var_dump($cars);

    # CONSTANTS
    // define("SYSTEM_NAME", "Romel's Point of Sale System", false);

    // define constants
    // define("SYSTEM_NAME", "Romel's Point of Sale System");

    // define("SERVERS", 5, false);
    // define("VERSION", 1.5, false);
    // define("LICENSED", true, false);
    // define("DEVELOPERS", ['Romel Fernando', 'Jonh Doe'], false);
    
    // echo SYSTEM_NAME;
    // echo '<br>';
    // echo VERSION;
    // echo '<br>';
    // echo LICENSED;
    // echo '<br>';
    // echo DEVELOPERS[0];

    // other way to define constant
    // const STATUS = 'Active';
    // echo STATUS;

    
    # CONDITIONAL STATEMENTS
    
    // If statement
    // $number = 2;
    // if ($number == 1 ) {
    //     echo 'Ang numbero ay isa';
    // }

    // If...Else Statement
    // $number = 2;
    // if ($number == 1 ) {
    //     echo 'Ang numbero ay isa';
    // } 
    // else {
    //     echo 'Hindi ko alam ang numbero na to!';
    // }

    // IF...ElseIF...Else Statement
    // $number = 3;
    // if ($number == 1 ) {
    //     echo 'Ang numero ay isa';
    // } 
    // elseif($number == 2) {
    //     echo 'Ang numero ay dalawa!';
    // }
    // elseif($number == 3) {
    //     echo 'Ang numero ay tatlo!';
    // }
    // else {
    //     echo 'Hindi ko alam ang numero na to!';
    // }

    # Logical Operators
    // $number = 1;
    // $language = 'tagalog';

    // if ($number == 1) {
    //     if ($language == 'tagalog') {
    //         echo 'Ang tagalog ng 1 ay isa!';
    //     }
    // }

    # Types of Logical operators
    // AND = and, &&
    // $number = 1;
    // $language = 'tagalog';

    // // if ($number == 1 and $language == 'tagalog') { 
    // //     echo 'Ang tagalog ng 1 ay isa!!';
    // // }

    // if ($number == 1 && $language == 'tagalog') { 
    //     echo 'Ang tagalog ng 1 ay isa!!';
    // }

    // OR = or, ||
    // $word = 'isa';
    // if ($word == 'one' or $word == 'isa') {
    //     echo 'The word you entered is 1!';
    // }

    // if ($word == 'one' || $word == 'isa') {
    //     echo 'The word you entered is 1!';
    // }

    // XOR = xor
    // $paa_1 = 'kaliwa';
    // $paa_2 = 'kaliwa';

    // if ($paa_1 == 'kaliwa' xor $paa_2 == 'kaliwa') {
    //     echo 'Okay! tama ang hakbang mo!';
    // }

    // NOT = !
    // $sagot = 'orange';

    // if ($sagot != 'mangga') {
    //     echo 'Mali po!';
    // }

    
    // // Switch Statements
    // $word = 'isa';

    // switch ($word) {
    //     case $word == 'one' or $word == 'isa':
    //         echo 'The number is 1!';
    //         break;
    //     case $word == 'two' or $word == 'dalawa':
    //         echo 'The number is 2!';
    //         break;
    //     default:
    //         echo 'I dont know!';
    // }

    # Operators
    
    // Arithmetic Operator
    // add, subract, multiply, divide
    // $price = 100;
    // $delivery_fee = 10;
    // $discount = 5;
    // $quantity = 2;
    // $payment_terms = 3;

    // echo (($price + $delivery_fee - $discount) * $quantity) / $payment_terms;

    // modulus 5/2 = 2.5 remainder 1
    // echo 487 % 32;

    // exponential
    // echo 10 ** 3; // equal to 10 * 10 * 10


    // Assignment Operator
    // =
    // $first_number = 1;
    // $second_number = $first_number;
    // echo $first_number;
    // echo '<br>';
    // echo $second_number;

    // +=
    // $first_number = 0;
    // $first_number += 10; // $first_number = $first_number + 10
    // echo $first_number;

    // -=
    // $first_number = 0;
    // $first_number -= 10; // $first_number = $first_number - 10
    // echo $first_number;

    // *=
    // $first_number = 0;
    // $first_number *= 10; // $first_number = $first_number * 10
    // echo $first_number;

    // /=
    // $first_number = 20;
    // $first_number /= 10; // $first_number = $first_number / 10
    // echo $first_number;

    // %=
    // $first_number = 20;
    // $first_number %= 10; // $first_number = $first_number % 10
    // echo $first_number;

    // Logical Operator - done! see conditional statement area!

    // Comparison Operator
    // equality  ==
    // $first_number = 1;
    // $second_number = 12;
    // var_dump($first_number == $second_number);

    // identical ===
    // var_dump($first_number === $second_number);

    // not equal != or <>
    // var_dump($first_number != $second_number);
    // var_dump($first_number <> $second_number);

    // not identical !==
    // var_dump($first_number !== $second_number);

    // greater than >
    // $first_number = 2;
    // $second_number = 1;
    // var_dump($first_number > $second_number);

    // less than <
    // $first_number = 2;
    // $second_number = 15;
    // var_dump($first_number < $second_number);

    // greater than or equal to >=
    // $first_number = 1;
    // $second_number = 1;
    // var_dump($first_number >= $second_number);

    // less than or equal to <=
    // $first_number = 1;
    // $second_number = 1;
    // var_dump($first_number <= $second_number);

    // spaceship <=> posible result [-1, 0 or 1]
    // $first_number = 1;
    // $second_number = 2;
    // var_dump($first_number <=> $second_number);

    // $first_number = 1;
    // $second_number = 1;
    // var_dump($first_number <=> $second_number);

    // $first_number = 2;
    // $second_number = 1;
    // var_dump($first_number <=> $second_number);
    

    // Incremental/Decremental Operator
    // $first_number = 1;
    // pre-increment
    // echo ++$first_number;
    // echo '<br>';
    // echo $first_number;

    // post-increment
    // echo $first_number++;
    // echo '<br>';
    // echo $first_number;

    // pre-decement
    // $first_number = 10;
    // echo --$first_number;
    // echo '<br>';
    // echo $first_number;

    // post-decement
    // $first_number = 10;
    // echo $first_number--;
    // echo '<br>';
    // echo $first_number;

    // String operator
    // concatenate
    // $word_1 = 'Magandang';
    // $word_2 = 'Araw';
    // echo $word_1.' '.$word_2;

    // assignemt operator on string
    // $word_1 = 'Magandang';
    // $word_2 = 'Araw';
    
    // $word_1 .= $word_2;
    // echo $word_1;

    // Conditional Assignment Operator
    // ternary operator ?: 
    // $user = 'romel';
    // $greeting = $user == 'admin' ? 'Hello Admin!' : 'Hello Guest!';
    // echo $greeting;

    // Null coalescing ??
    // $color = 'red';
    // $color = $color ?? "blue";
    // echo $color;

    # LOOPS

    // while loop
    // $pushup = 1;

    // while ($pushup <= 10 ) {
    //     echo "push up number: $pushup <br>";
    //     $pushup++;
    // }

    // do while loop
    // $pushup = 1;
    // do {
    //     echo "push up number: $pushup <br>";
    //     $pushup++;
    // } while ($pushup <= 10)

    // for loop
    // for ($pushup = 5; $pushup <= 10; $pushup++) {
    //     echo "push up number: $pushup <br>";
    // }

    // for each loop
    // $activity = ['pushup', 'situp', 'burpee'];
    // foreach ($activity as $current_activity) {
    //     echo "$current_activity <br>";
    // }

    // nested loop
    // $activity = ['pushup', 'situp', 'burpee'];
    // foreach ($activity as $current_activity) {
       
    //     // give me 2 push ups
    //     if ($current_activity == 'pushup') {
    //         $pushup = 1;
    //         while ($pushup <= 2 ) {
    //             echo "push up number: $pushup <br>";
    //             $pushup++;
    //         }
    //     }

    //     // give me 4 sit ups
    //     if ($current_activity == 'situp') {
    //         $situp = 1;
    //         do {
    //             echo "sit up number: $situp <br>";
    //             $situp++;
    //         } while ($situp <= 4);
    //     }

    //     // give me 6 burpee
    //     if ($current_activity == 'burpee') {
    //         for ($burpee = 1; $burpee <= 6; $burpee++) {
    //             echo "burpee number: $burpee <br>";
    //         }
    //     }

       
    // }

    # FUNCTIONS
    // $my_word = 'Magandang araw sayo!';
    // echo strlen($my_word);

    // without param or argument
    // function my_greeting() {
    //     echo 'Magandang araw!';
    // }

    // with single param or argument
    // function my_greeting($name) {
    //     echo "Magandang araw! $name";
    // }

    // with more than one param or argument
    // function my_greeting($firstname, $lastname) {
    //     echo "Magandang araw! $firstname $lastname";
    // }


    // my_greeting('Romel', 'Fernando');

    // using strict rule!
    // declare(strict_types=1); // 0 means not strict
    // function my_greeting(string $firstname, string $lastname) {
    //     echo "Magandang araw! $firstname $lastname";
    // }

    // my_greeting(1, 'Fernando');

    // add default value to function
    // function my_greeting($name = 'Guest') {
    //     echo "Magandang araw! $name";
    // }

    // my_greeting();

    // using return!
    // function my_strlen($word){
    //     $word_as_array = str_split($word);
    //     $letter_count = 0;

    //     foreach ($word_as_array as $letter) {
    //         $letter_count++;
    //     }

    //     return $letter_count;
    // }

    // echo my_strlen('Hello sayo!');
    // echo '<br>';
    // echo strlen('Hello sayo!');

    // DATE and TIME
    // syntax : date(format, timestamp);

    // format - required
    // timestamp - optional

    // list of formats!
    // echo date("m/d/Y") . '<br>';
    // echo date("Y") . '<br>'; // year - full
    // echo date("y") . '<br>'; // year - last two digit
    // echo date("M") . '<br>'; // month - short string
    // echo date("m") . '<br>'; // month - number
    // echo date("D") . '<br>'; // day - short string
    // echo date("d") . '<br>'; // day - number
    // echo date("l") . '<br>'; // day - full string
    // echo date("H") . '<br>'; // time - 24 hour format
    // echo date("h") . '<br>'; // time - 12 hour format
    // echo date("i") . '<br>'; // minute 
    // echo date("s") . '<br>'; // seconds
    // echo date("A") . '<br>'; // am or pm - uppercase
    // echo date("a") . '<br>'; // am or pm - lowercase


    // set timezone
    // date_default_timezone_set("Asia/Manila");
    // // check current time zone
    // echo date_default_timezone_get().'<br>';
    // // get current date 
    // echo date("m-d-Y h:i:s A").'<br>';

    // Create date and time
    // sytax: mktime(hour(24), minute, second, month, day, year)

    // $delivery_date = mktime(8, 30, 0, 4, 15, 2020);
    // echo date("m-d-Y h:i:s A", $delivery_date);

    // syntax :  strtotime(time, now);
    // $start_date = strtotime("today");
    // $preparation_date = strtotime("now");
    // $shipping_date = strtotime("tomorrow");

    // $delivery_date = mktime(8, 30, 0, 4, 15, 2020);
    // $completed_date = strtotime("tomorrow", $delivery_date);
    // $closed_date = strtotime("+6 hours", $completed_date);

    // add intervals
    // +1 hours, +1 days, +1 weeks, +1 months, +1 years

    // echo 'Start date:'.date("m-d-Y h:i:s A", $start_date).'<br>';
    // echo 'Preparation date:'.date("m-d-Y h:i:s A", $preparation_date).'<br>';
    // echo 'Shipping date:'.date("m-d-Y h:i:s A", $preparation_date).'<br>';

    // echo 'Delivery date:'.date("m-d-Y h:i:s A", $delivery_date).'<br>';
    // echo 'Completed date:'.date("m-d-Y h:i:s A", $completed_date).'<br>';
    // echo 'Closed date:'.date("m-d-Y h:i:s A", $closed_date).'<br>';

    // $scheduled_meeting = strtotime("1:00pm July 23 2020");
    
    // echo date("Y-m-d h:i:s A", $scheduled_meeting);

    # OOP - Object Oriented Programming

    // Create Trait
    trait Permit {
        public $permit_number;
        public $permin_area;
    }

    // Create Class
    class Customer {
        // Difference access modifiers [public, private, protected]
        public $firstname;
        private $personal_phone;
        protected $business_phone;

        const THANK_YOU_MESSAGE = 'Thank you for doing business with us!';

        // Create/override constructor
        function __construct($firstname = 'No Name', $personal_phone = 0, $business_phone = 0){
            $this->firstname = $firstname;
            $this->personal_phone = $personal_phone;
            $this->business_phone = $business_phone;
        }

        // Create/override destructor
        function __destruct() {
            // echo 'The destructor has been run!';
        }

        // create function! not can use acces modifiers [public, private, protected]
        public function showSummary() {
            echo 'Name: '.$this->firstname.'<br>';
            echo 'Personal Phone: '.$this->personal_phone.'<br>';
            echo 'Business Phone: '.$this->business_phone.'<br>';
        }

        // create static function
        public static function greetings() {
            echo 'Hello! Welcome back!';
        }
    }

    // inherit an existing class
    class Supplier extends Customer {
        public $address;

        // use Traits
        use Permit;
    }

    // inherit an existing class
    class Owner extends Customer {
        public $address;
        use Permit;
    }

    // Instantiate
    // $customer_1 = new Customer('Romel', 123, 456);
    // set value of property
    // $customer_1->firstname = 'Romel';
    // access property
    // echo $customer_1->firstname;
    // $customer_1->showSummary();

    // destroy an object
    // unset($customer_1);

    // Instantiate
    $supplier_1 = new Supplier();
    // assign values
    $supplier_1->firstname = "Omeng's Soap Products";
    // access values
    $supplier_1->address = "Manila";

    // set property of trait
    $supplier_1->permit_number = 'Metro Manila';
    $supplier_1->permit_area= '111';

    // access property
    echo '<br>';
    echo $supplier_1->permit_number;
    echo '<br>';
    echo $supplier_1->permit_area;
    echo '<br>';

    // echo $supplier_1->firstname.'<br>';
    // echo $supplier_1->address.'<br>';
    //echo $supplier_1->business_phone.'<br>';
    //echo $supplier_1->personal_phone.'<br>';
    echo $supplier_1::THANK_YOU_MESSAGE;
    echo '<br>';
    echo $supplier_1::greetings();
?>