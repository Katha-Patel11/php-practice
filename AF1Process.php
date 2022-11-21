<?php
    $arr=array("A"=>"a","B"=>"b","C"=>"c","D"=>"d","E"=>"e",);
    $key=$_POST['alpha'];
    if(array_key_exists($key,$arr))
    {
        echo "Key Found. Value is $arr[$key]";
    }
    else
    {
        echo "Key not found";
    }
?>