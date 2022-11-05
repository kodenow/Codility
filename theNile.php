<?php

function total(){

}

$json = '{  
    "movies":[  
        {
            "SKU":9325336130810,
            "movie":"Game of Thrones: Season 1",
            "Price":39.49
        },
        {
            "SKU":25336028278,
            "movie":"The Fresh Prince of Bel-Air",
            "Price":19.99
        },
        {
            "SKU":9780201835953,
            "movie":"The Mythical Man-Month",
            "Price":31.87,
            "pricing_rule":10
        },
        {
            "SKU":9781430219484,
            "movie":"Coders at Work",
            "Price":28.72,
            "pricing_rule":3
        },
        {
            "SKU":9780132071482,
            "movie":"Artificial Intelligence",
            "Price":119.92
        }
    ]
 }';
 
 $movies = json_decode($json,true);
var_dump($movies);
