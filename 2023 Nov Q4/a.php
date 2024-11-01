<!DOCTYPE html>
<html lang="en">
<head></head>
<body>
    <?php
        //create a associative array called age
        $age = array("Anne" => "20", "Harry" => "22", "Emma" => "18", "Smith" = "21");

        foreach($age as $x => $x_value){
            echo $x." is ".$x_value." years old.";
            echo "<br>";
        }
    ?>
</body>
</html>