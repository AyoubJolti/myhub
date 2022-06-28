<?php include_once "gesusers.php"; ?>
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
     $rechercher=gesusers::rechercher($_GET['id']);
     while($row=$rechercher->fetch()){
         $nom=$row['nome'];
         $ville=$row['ville'];
         $id=$row['id'];


     }
    
    ?>
    <form action="ges_users.php?action=edit" method="POST">
        <input type="hidden" name="id" value="<?=$id;?>">
    <table border="2" style="margin: auto;height: 300px;width: 300px;">
    <tr>
        <td>Nom</td>
        <td><input  type="text" name="Nom" value="<?=$nom ;?>"></td>
    </tr>
    <tr>
        <td>Prenom</td>
        <td><input type="text" name="Prenom" value="<?=$ville ;?>"></td>
    </tr>
    <tr>
        <td><input type="reset" value="Annuler"></td>
        <td><input type="submit" value="Submit"></td>

    </tr>
    </table>
    </form>
    <script>

    
    </script>
</body>
</html>