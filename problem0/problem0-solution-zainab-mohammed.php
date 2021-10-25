<?php

    $input = file_get_contents("inputs.json");
    $fridge = json_decode($input, true);

    $index_key = search_string($fridge);

    if($index_key != -1){
        echo 'the item you looking for is in position '.$index_key;
    }else{
        echo $index_key;
    }


    function search_string($fridge) {
        $x = -1;
        foreach ($fridge['fridge'] as $key => $value) {
            if($value == $fridge['item']) {
                $x = $key;   
                break;
            }
        }
        return $x;
    }


   

    