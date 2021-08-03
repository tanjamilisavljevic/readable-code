<?php

function orderPizza($pizzaType, $receiver)
{
    $toPrint = 'A ';
    $toPrint .= $pizzaType;
    $price = calculateCost($pizzaType);
    $address = 'unknown';

    switch ($receiver) {
        case 'koen':
            $address = 'a yacht in Antwerp';
            break;
        case 'manuele':
            $address = 'somewhere in Belgium';
            break;
        case 'students':
            $address = 'BeCode office';
            break;
    }

    echo 'Creating new order... <br>';
    $toPrint .= ' pizza should be sent to ' . $receiver . ". <br>The address: {$address}.";
    echo $toPrint;
    echo '<br>';
    echo 'The bill is €' . $price . '.<br>';
    echo "Order finished.<br><br>";
}

function calculateCost($pizzaType)
{
    $price = 'unknown';

    switch ($pizzaType) {
        case 'marguerita';
            return 5;
        case 'golden';
            return 100;
        case 'calzone';
            return 10;
        case 'hawaii';
            throw new Exception('Computer says no');
    }
    return $price;
}

function orderForAll()
{
    orderPizza('calzone', 'koen');
    orderPizza('marguerita', 'manuele');
    orderPizza('golden', 'students');
}

orderForAll();
