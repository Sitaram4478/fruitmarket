<?php
include("connection.php");

$q="select * from fruit_table";
$res=mysqli_query($con,$q);
?>
<html>
    <head>
        <title>view fruits</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <table class="table table striped">
            <tr>
                <th>fruit id</th>
                <th>Fruit Name</th>
                <th>Quantities</th>
                <th>Mobile Number</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
            <?php
                $i=1;
                
                while($row=mysqli_fetch_object($res))
                {
                ?>
                    <tr>
                        <td><?php echo $i?></td>
                        <td><?php echo $row->fruit_name?></td>
                        <td><?php echo $row->fruit_kg?></td>
                        <td><?php echo $row->mobile_number?></td>
                        <td><a href="upf.php?fruitid=<?php echo $row->fruit_id;?>" class="btn btn-primary">EDIT</a></td>
                        <td><a href="def.php?fruitid=<?php echo $row->fruit_id;?>" onclick=" return confirm('are you sure want to delete the data')"class="btn btn-danger">DELETE</a></td>
                        
                    </tr>
                    
                    
                <?php
                $i++;
                }
            
            ?>
        </table>
    </body>
</html>