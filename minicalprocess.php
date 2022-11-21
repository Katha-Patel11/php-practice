<?php
    if(isset($_POST['add']))
    {
        $no1=$_POST['no1'];
        $no2=$_POST['no2'];
        echo "Addition : ".($no1+$no2);
    }
    if(isset($_POST['sub']))
    {
        $no1=$_POST['no1'];
        $no2=$_POST['no2'];
        echo "Subtraction : ".($no1-$no2);
    }
    if(isset($_POST['mul']))
    {
        $no1=$_POST['no1'];
        $no2=$_POST['no2'];
        echo "Multiplication : ".($no1*$no2);
    }
    if(isset($_POST['div']))
    {
        $no1=$_POST['no1'];
        $no2=$_POST['no2'];
        echo "Division : ".($no1/$no2);
    }
    if(isset($_POST['rand']))
    {
        echo "Random : ".rand();
    }
?>