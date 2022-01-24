<?php
    $alphabet = range('a', 'z');
    $werknemers = array_map('strtolower', array("Arne","Reinier","Kylian","Huub","Mick","Brenda","Ruben","Desley","Carly","Esther"));
    sort($werknemers);
    $total = 0;
    echo '<table>';
    foreach($werknemers as $werknemer)
    {
        echo '<tr>' . 
            '<td>' . $werknemer . '</td>';
            $first = (int)array_search(substr($werknemer, 0, 1), $alphabet) +1;
            $subtotal = 0;
            foreach( str_split($werknemer) as $letter)
            {
                $number = array_search($letter, $alphabet);
                $subtotal += $number +1;
            }
            echo '<td>' . $subtotal . '</td>';
            echo '<td> x </td>';
            echo '<td>' . $first . '</td>';
            echo '<td>' . $subtotal * $first . '</td>';
        echo '</tr>';
        $total += $subtotal;
    };
    echo '</table>';
    echo '<p>De totale score is: ' . $total . '</p>';
?>