
<?php

// mengunakan for

function loopFor()
{
    $salam = "halo";
    $jumlah = 5;

    for($i = 1; $i <= $jumlah; $i++)
    {
        echo $i." ".$salam ."<br>";
    }
}

loopFor();