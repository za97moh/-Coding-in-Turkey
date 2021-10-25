<?php

    $input = file_get_contents("inputs.json");
    $data = json_decode($input, true);

    $msg = check_data($data['fridge'],$data['ingredients']);

    if($msg){
        echo 'true all ingredients exist';
    }else{

        echo 'false,not all ingredients and quentity are exist';
    }


    function check_data($all_data, $cook_data) {
        $x = '';
        foreach($all_data as $key_all=>$data){
            foreach($cook_data as $key=>$val){
                if($key == $key_all){
                   if($val == $data){
                        $x = true;
                   }else{
                       $x= false;
                       break ;
                   }
                }
            }
        }

        return $x ;
    }


   

    