<?php
    $str="hello world";
    $str2="people";
    echo "Number of characters in string are : ".strlen($str);
    echo "<br>";
    echo "String to Upper : ".strtoupper($str);
    echo "<br>";
    echo "String to lower : ".strtolower($str);
    echo "<br>";
    echo "String in reverse : ".strrev($str);
    echo "<br>";
    echo "First Character upper : ".ucfirst($str);
    echo "<br>";
    echo "First Character upper of all word : ".ucwords($str);
    echo "<br>";
    echo "sha1 Function : ".sha1($str);
    echo "<br>";
    echo "md5 Function : ".md5($str);
    echo "<br>";
    echo "String Replaced : ".str_replace("world",$str2,$str);
    echo "<br>";
    similar_text($str,$str2,$per);
    echo "Similarity : $per %";
?>