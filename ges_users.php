<?php
include_once "gesusers.php";
include_once "users.php";
if (isset($_GET['action']) != null) {
    $action = $_GET['action'];
}
switch ($action) {
    case "add":
        $use = new users(0, $_POST['Nom'], $_POST['Prenom']);
        $add_user = gesusers::ajouter($use);


        break;
    case "del":
        $deluser = gesusers::delete($_GET['id']);
        break;
    case "edit":
        $edit = gesusers::edit($_POST['id'], $_POST['Nom'], $_POST['Prenom']);
        break;
    case "delA":
        $a = $_POST['check'];
        foreach ($a as $langeue) {
            $deluser = gesusers::delete($langeue);
        };
        break;
}
header('location:affichage.php');
