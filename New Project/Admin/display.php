<?php
$con= new mysqli("localhost","root","","oibp");
if(!$con)
{
echo "connection Error";
  exit;
}

$result= $con->query("select * from  category");

?>

<table align="center" cellspacing="0" cellpadding="8" border="1">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Email</td>
        <td>Contact</td>
        <td>City</td>
        <td>Delete</td>
    </tr>
    <?php
    while($row=$result->fetch_object())
    {
        ?>
       
            <tr>
                     
                     <td><?php echo $row->id;?></td>
                     <td><?php echo $row->name;?></td>
                     <td><?php echo $row->email;?></td>
                    <td><?php echo $row->contact;?></td>
                    <td><?php echo $row->city;?></td>
                    <td><a href="delete.php?delid=<?php echo $row->id;?>">delete</a></td>

            </tr>
        <?php
    }
    
    ?>
</table>