<?php
include_once "gesusers.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if(isset($_POST['color'])){
        $color=$_POST['color']; 

    }
    else{
     $color="blank";
    }
    ?>
    <form action="ges_users.php?action=delA" method="post" >
    <table border="2" style="margin: auto;height: 300px;width: 300px;color:<?=$color;?>">
        <tr>
            <td>ID</td>
            <td>NOM</td>
            <td>PRENOM</td>
            <td colspan="2"><a href="add.php">Ajouter</a></td>

        </tr>
        <?php
      
       

        
     
        $s=new gesusers();
        $select=gesusers::selectAll_Users();
        while($row=$select->fetch()){
          
        
        ?>
        <tr>
            <td><?=$row['id']?></td>
            <td><?=$row['nome'] ?></td>
            <td><?=$row['ville'] ?></td>
            <td><input type="checkbox" name="check[]" value="<?=$row['id']?>"> delete</td>

            <td><a href="ges_users.php?action=del&id=<?=$row['id']?>">delete</a></td>
            <td style="color:<?=$_POST['color']?>;"><a  href="edit.php?id=<?=$row['id']?>" >edit</a></td>


        </tr>
        <?php
        }
        ?>
        <tr>
            <td colspan="2"><input type="reset" value="Annuler"></td>
            <td colspan="3"><input type="submit" value="delete"></td>

        </tr>
    </table>
    
    </form>
</body>
</html>