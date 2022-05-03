<?php

include 'connect.php';

$pre_text = "Tiaka compañeros
Ti pashialoti Maria
Ti mo youaloske iuan tonantsi
Santa María Guadalupe

Tiaka compañeros
Ti pashialoti Maria
Ti mo youaloske iuan tonantsi
Santa María Guadalupe ";

$translation = "";

$text = str_word_count($pre_text , 1);

$len = count($text);
 
echo "Original text: ".$pre_text." \n";
echo "texto traducido: ";
for ($i = 0; $i < $len; $i++){

    $word = $text[$i];
    strval($word);
    $stmt = $conn->query("SELECT * FROM words WHERE TRIM(nahuatl) = '$word' ");
    if ($row = $stmt->fetch()){

        echo $row['spanish'];
        echo " ";
        

    }else{

        echo $word;
        echo " ";

    }

}

