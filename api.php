<?php

include 'connect.php';

//spanish to nahuatl
if (isset($_POST['pre_text'])){

    $pre_text = $_POST['pre_text'];

    $translation = "";

    $text = str_word_count($pre_text , 1);

    $len = count($text);

    for ($i = 0; $i < $len; $i++){

        $word = $text[$i];
        strval($word);
        $stmt = $conn->query("SELECT * FROM words WHERE TRIM(spanish) = '$word' ");
        if ($row = $stmt->fetch()){

            echo $row['nahuatl'];
            echo " ";
        }else{

            echo $word;
            echo " ";

        }

        

    }

    
}

