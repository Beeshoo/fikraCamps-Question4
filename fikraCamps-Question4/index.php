<?php

    /*  Q4:  Write a function that combines two lists by alternatingly taking elements, e.g.
    ===================================================================================================================
    ====    [a,b,c], [1,2,3] → [a,1,b,2,c,3].
    ====    [1,2,5,8,0], [9,4,8,7,6] → [1, 9, 2, 4, 5, 8, 8, 7, 0, 6].
    ===================================================================================================================
    ===================================================================================================================
    ====    function name : combineTowArrays()
    ====    variables     : $arr1   => 1st array in function
    ====                    $arr2   => 2nd array in function
    ====                    $arr3   => 1st array sending to the function
    ====                    $arr4   => 2st array sending to the function
    ====                    $result => get the result of calling combineTwoArrays function
    ===================================================================================================================
    */


    function combineTwoArrays($arr1=array(), $arr2=array()){

        $arr = array();

        for ($i=0; $i < count($arr1); $i++) { 
            $arr[] = $arr1[$i];
            $arr[] = $arr2[$i];
        }
        return $arr;
    }

    $arr1 = array(10,5,8,2); 
    $arr2 = array('ten','five','eight', 'two');
    $result = combineTwoArrays($arr1,$arr2);

    echo "<pre>";
    print_r($result);
    echo "</pre>";
?>