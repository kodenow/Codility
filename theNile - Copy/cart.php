<?php
$items = include('movies.php');
$discounts = include('discounts.php');

class Cart{
    private $items;
    private $discounts;

    public function __construct($items, $discounts)
    {
        $this->items = $items;
        $this->discounts = $discounts;
    }

    function addItem($sku)
    {
        $movie['sku'] = $sku;
        return $movie;
    }

    function sortBag($bag)
    {
        usort($bag, fn($a, $b) => $a['sku'] <=> $b['sku']);
        return $bag;
    }

    function calculateBag($bag)
    {
        if (count($bag) == 0 ) return false;
        $sortedBag = $this->sortBag($bag);
        $lineItems = $this->getLineItems($sortedBag);
        $order = $this->prepareLineData($lineItems);
        return "$" . $this->computeOrder($order);        
    }

    function getLineItems($bag)
    {
        return array_count_values(array_column($bag, 'sku'));
    }

    function prepareLineData($lineItems)
    {
        $order = [];
        foreach($lineItems as $sku => $qty) {
            $amount = $this->findDiscount($sku,$qty);
            if( empty($amount) ){
                $amount = $qty * $this->items[$sku]['price'];
            }
            $order[$sku] = $amount;
        }
        return $order;
    }

    function computeOrder($order)
    {
        $total = 0;
        foreach($order as $amount){
            $total += $amount;
        }
        return $total;
    }

    function findDiscount($sku,$qty) 
    {
        $discounts = $this->discounts;
        if ( isset($discounts[$sku])  && $this->isQualified($discounts[$sku], $qty) ) {
            if( $this->isBundled($discounts[$sku]) ) {
                $less = floor($qty / $discounts[$sku]['qualified']);
                $qty = $qty - $less;
            }
            $amount = $qty * $discounts[$sku]['price'];
            return $amount;
        }
        return false;
    }

    function isBundled($discount) 
    {
        return $discount['bundled'];
    }

    function isQualified($discount, $qty) 
    {
        if($qty >= $discount['qualified']) return true;
        return false;
    }
}

$cart = New Cart($items, $discounts);
$bag = [];

//test case 1
/* 
$bag[] = $cart->addItem(9780201835953);
$bag[] = $cart->addItem(9780201835953);
$bag[] = $cart->addItem(9780201835953);
$bag[] = $cart->addItem(9780201835953);
$bag[] = $cart->addItem(9780201835953);
$bag[] = $cart->addItem(9780201835953);
$bag[] = $cart->addItem(9780201835953);
$bag[] = $cart->addItem(9780201835953);
$bag[] = $cart->addItem(9325336028278);
$bag[] = $cart->addItem(9780201835953);
$bag[] = $cart->addItem(9780201835953); 
  */


//test case 2
/* 
$bag[] = $cart->addItem(9781430219484);
$bag[] = $cart->addItem(9781430219484);
$bag[] = $cart->addItem(9780132071482);
$bag[] = $cart->addItem(9781430219484);
 */

$total = $cart->calculateBag($bag);
echo $total;


