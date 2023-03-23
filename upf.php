<?php
include("connection.php");
$q2="select * from fruit_table where fruit_id=".$_GET['fruitid'];
$res=mysqli_query($con,$q2);
$row=mysqli_fetch_object($res);
if(isset($_REQUEST['btnsubmit']))
{
   echo  $q="UPDATE fruit_table SET
    fruit_name='".$_REQUEST['ufruitname']."',
    fruit_kg='".$_REQUEST['ufruitkg']."',
    mobile_number='".$_REQUEST['umono']."'
    where fruit_id=".$_GET['fruitid'];
    mysqli_query($con,$q);
    header("location:viewf.php");
}
?>
<html>
    <head>
        <title>edit/update fruit</title>
    </head>
    <body>
    <center>
            <form method="post">
                <table border="1">
                    <tr>
                        <td colspan="2" align="center" >ADD FRUIT</td>
                    </tr>
                    <tr>
                        <td>Fruit Name</td>
                        <td><input type="text" name="ufruitname" value="<?php echo $row->fruit_name?>" placeholder="enter your fruit name" required></td>
                    </tr>

                    <tr>
                        <td> Quantity of Fruit in  Kg</td>
                        <td><textarea name="ufruitkg" placeholder="enter how many kg of fruit you want" required> <?php echo $row->fruit_kg?></textarea></td>
                    </tr>

                    <tr>
                        <td>Mobile Number</td>
                        <td><input type="text" name="umono" value="<?php echo $row->mobile_number?>" placeholder="enter your number" required></td>
                    </tr>

                    <tr>
                        <td colspan="2" align="center">
                        <button name="btnsubmit" type="submit" class="btn btn-primary">UPDATE</button>
                            <a href="viewf.php" class="btn btn-primary">BACK</a>
                        </td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
    </body>
</html>