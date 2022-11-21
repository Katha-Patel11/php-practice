<?php
    if($_GET)
    {
        $no1=$_GET['No1'];
        $no2=$_GET['No2'];
        $sum=$no1+$no2;
        echo "<center>Sum : $sum </center>";
    }
?>

<html>
<body>
    <center>
    <form method="GET">
        <table border='1'>
            <tr>
                <td>
                    No1:
                </td>
                <td>
                    <input type="number" name="No1">
                </td>
            </tr>
            <tr>
                <td>
                    No2:
                </td>
                <td>
                    <input type="number" name="No2">
                </td>
            </tr>  
            <tr>
                <td>
                    <input type="submit" value="submit">
                </td>
            </tr> 
        </table>
    </form>
    </center>
</body>
</html>