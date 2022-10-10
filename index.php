<html>
    <head>
        <meta charset="UTF-8"> 
        <title>The Glorious Church</title>
    </head>
    <body>
        <?php
        //single comment
        #single comment
        $name = "Fly Bruh";

        echo "Hello ", "World", "My name is {$name}" , "<br>";
        /*Multi line comment
        you gerrit*/
        $age = 30.87;
        echo "My name is {$name}" , "<br>";
        echo "I'm " . $age . " years old" . "<br>";

        //strings have to be put in double quote
        //float and integers can stay without strings

        //boolean values have true or false values
        $is_allowed = true;
        echo $is_allowed . "<br>";

        $names = array("Dary", "Phlorah", "Megan", 789, 67.908);
        echo $names[2];
        $flags = array("Mexico", "USA", "Nigeria");

        echo "<br>";

        /*var_dump displays information about variables. 
        It is also used to display information about variables
        print_r is user to display a simplified version of the information*/

        var_dump($names);
        print_r($names);

        //array_merge is a php function used to merge two or more arrays
        $flags = array_merge($names, $flags);

        echo "<br>";

        var_dump($flags);

        echo "<br>";

        $doors = array("Wood" => 309.0, "Brass" => 4590.0);

        print_r($doors); 

        foreach ($doors as $key => $value) {
            echo $key . " doors sells for " . "₦" . $value . "<br>"; 
        }

        //multidimensional arrays

        $forex = array(
                "stock options" => array("EURUSD", "GBPUSD", "NZDUSD"),
                "indexes" => array("US30", "NAS100", "Hk100")
        );

        echo $forex["indexes"][1] . "<br>";
        //exercises

        $x = 8;
        $y = 6;

        $z = ($x + $y) * 5;
        echo $z;

        $price = 1290;
        $vat = 3.90;

        $totalprice = ($price * $vat) +  $price;

        echo "The price for this item is " . $price . "<br>" . "the VAT is " . $vat . "<br>";
        echo "Therefore the total price is " . $totalprice;

        $countries = array(
                "Nigeria" => "Abuja", "United Kingdom" => "London", "China" => "Hong Kong",
                     "USA" => "Washington D.C", "Ghana" => "Accra");
        
        foreach ($countries as $key => $value) {
            echo "The capital  of " . $key . " is " . $value . "<br>";

        }

        $cm = 1009;

        $cmToInch = $cm * 0.39;

        echo $cm . " centimetres is equivalent to " . $cmToInch . " Inches"; 
        ?>
    <div>Hello</div>
    </body>
</html>