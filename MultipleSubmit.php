<?php
    if(isset($_POST['add']))
    {
        $no1=$_POST['No1'];
        $no2=$_POST['No2'];
        $sum=$no1+$no2;
        echo "<center><h3>Addition : $sum </h3></center>";
    }
    if(isset($_POST['sub']))
    {
        $no1=$_POST['No1'];
        $no2=$_POST['No2'];
        $sub=$no1-$no2;
        echo "<center><h3>Subtraction : $sub </h3></center>";
    }
    if(isset($_POST['mul']))
    {
        $no1=$_POST['No1'];
        $no2=$_POST['No2'];
        $mul=$no1*$no2;
        echo "<center><h3>Multiplication : $mul </h3></center>";
    }
    if(isset($_POST['div']))
    {
        $no1=$_POST['No1'];
        $no2=$_POST['No2'];
        $div=$no1/$no2;
        echo "<center><h3>Division : $div </h3></center>";
    }
    if(isset($_POST['mod']))
    {
        $no1=$_POST['No1'];
        $no2=$_POST['No2'];
        $mod=$no1%$no2;
        echo "<center><h3>Modulo : $mod </h3></center>";
    }
?>

<html>
<body>
    <center>
    <form method="post">
        <table>
            <tr>
                <td>
                    No1:
                </td>
                <td>
                    <input type="number" name="No1" required>
                </td>
            </tr>
            <tr>
                <td>
                    No2:
                </td>
                <td>
                    <input type="number" name="No2" required>
                </td>
            </tr>  
            <tr>
                <td colspan='2'>
                    <input type="submit" value="ADD" name="add">
                    <input type="submit" value="SUB" name="sub">
                    <input type="submit" value="MUL" name="mul">
                    <input type="submit" value="DIV" name="div">
                    <input type="submit" value="MOD" name="mod">
                </td>
            </tr> 
        </table>
    </form>
    </center>
</body>
</html>