<?php

    $input = file_get_contents("inputs.json");
    $data = json_decode($input, true);

    $msg = check_data($data['fridge'],$data['ingredients']);

    if($msg){
        echo 'true,all ingredients exist chef is able to cook the given meal.';
    }else{

        echo 'false,some ingredients not exist chef is not able to cook the given meal.';
    }


    function check_data($all_data, $cook_data) {
        $x = '';
        foreach ($cook_data as $key => $value) {
            if(!in_array($value,$all_data)) {
                $x = 'false';   
                break;
            }else{
                $x='true';
            }
        }
        return $x;
    }


   

    