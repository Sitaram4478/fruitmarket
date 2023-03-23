<?php
include("connection.php");


if(isset($_REQUEST['btnsubmit']))
{
    $q ="INSERT INTO fruit_table set
    fruit_name='".$_REQUEST['fruitname']."' ,
    fruit_kg='".$_REQUEST['fruitkg']."' ,
    mobile_number='".$_REQUEST['mono']."' 
    ";
    mysqli_query($con,$q);
    header("location:viewf.php");
}


?>

<html>
    <head>
        <title>fruit market</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
                        <td><input type="text" name="fruitname" placeholder="enter your fruit name" required></td>
                    </tr>

                    <tr>
                        <td> Quantity of Fruit in  Kg</td>
                        <td><textarea name="fruitkg" placeholder="enter how many kg of fruit you want" required></textarea></td>
                    </tr>

                    <tr>
                        <td>Mobile Number</td>
                        <td><input type="text" name="mono" placeholder="enter your number" required></td>
                    </tr>

                    <tr>
                        <td colspan="2" align="center">
                            <button name="btnsubmit" type="submit"class="btn btn-primary">submit</button>
                        </td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>