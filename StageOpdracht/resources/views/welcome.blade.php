<?php
    $alphabet = range('a', 'z');
    $werknemers = array_map('strtolower', array("Arne","Reinier","Kylian","Huub","Mick","Brenda","Ruben","Desley","Carly","Esther"));
    sort($werknemers);


    foreach($werknemers as $werknemer)
    {
        foreach( str_split($werknemer) as $letter)
        {
            echo $letter;
            echo array_search($letter, $alphabet)."<br>";
        }
    };
?>