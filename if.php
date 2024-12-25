<?php

echo "Enter a number\n";
$x = (int)trim(fgets(STDIN));
if($x%2 == 0)
{
    echo"Even numbeer";
}
else
{
    echo"odd number ";
}