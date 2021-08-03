<?php

function orderPizza($pizzaType, $receiver)
{
    $toPrint = 'A ';
    $toPrint .= $pizzaType;
    $price = calculateCost($pizzaType);
    $address = getReceiversAddress($receiver);


    echo 'Creating new order... <br>';
    $toPrint .= ' pizza should be sent to ' . $receiver . ". <br>The address: {$address}.";
    echo $toPrint;
    echo '<br>';
    echo 'The bill is €' . $price . '.<br>';
    echo "Order finished.<br><br>";
}

function getReceiversAddress ($receiver)
{
    switch ($receiver) {
        case 'koen':
            return 'a yacht in Antwerp';
        case 'manuele':
            return 'somewhere in Belgium';
        case 'students':
            return 'BeCode office';
    }
    return 'unknown';
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
