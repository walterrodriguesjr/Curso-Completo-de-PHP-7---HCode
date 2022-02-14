<?php 

function test($callback){

    $callback();
}

test(function(){
    echo "Terminou";
});

echo "<hr>";

$fn = function($a){

    var_dump($a);


};

$fn("Oi");

?>