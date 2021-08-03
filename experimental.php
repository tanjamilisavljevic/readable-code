<?php

// fw = for who
function orderPizza($PizzaType, $receiver)
{
    echo 'Creating new order... <br>';
    $toPrint = 'A ';
    $toPrint .= $PizzaType;
    $price = calculateCost($PizzaType);
    $address = 'unknown';
    if ($receiver == 'koen') {
        $address = 'a yacht in Antwerp';
    } elseif ($receiver == 'manuele') {
        $address = 'somewhere in Belgium';
    } elseif ($receiver == 'students') {
        $address = 'BeCode office';
    }
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