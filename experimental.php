<?php

// fw = for who
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

//function test($PizzaType)
//{
//    echo "Test: type is {$PizzaType}. <br>";
//}

function calculateCost($pizzaType)
{
    $price = 'unknown';
    if ($pizzaType == 'marguerita') {
        $price = 5;
    } else {
        if ($pizzaType == 'golden') {
            $price = 100;
        }
        if ($pizzaType == 'calzone') {
            $price = 10;
        }
        if ($pizzaType == 'hawai') {
            throw new Exception('Computer says no');
        }
    }
    return $price;
}

function orderForAll()
{
//    $test = 0;
    orderPizza('calzone', 'koen');
    orderPizza('marguerita', 'manuele');
    orderPizza('golden', 'students');
}

function makeAllHappy($DoIt)
{
    if ($DoIt) {
        orderForAll();
    }
}

makeAllHappy(true);