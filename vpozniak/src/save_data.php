<?php

include 'Db.php';
use Datastart\Db;

class save_data
{
    public function saveDb(){
        $config = require '../config.php';
        $db = new Db($config['db']);
        if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message']))
         {
             $insert = $db->query("INSERT INTO `users` (username, email, phone, message) VALUES (:username, :email, :phone, :message)", [
                 'username' => $_POST['username'],
                 'email' => $_POST['email'],
                 'phone' => $_POST['phone'],
                 'message' => $_POST['message'],
             ]);
         }
    }

    public function saveFile(){

        if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message']))
        {
            $data = date("Y-m-d H-i-s");
            $file = fopen("$data.txt", 'a+');
//            $file = fopen("form.txt", 'a+');
            fwrite($file, $_POST['username']." ".$_POST['email']." ".$_POST['phone']." ".$_POST['message']."\n");
            fclose($file);
        }
    }
}
    $rez = new save_data();
    $rez->saveDb();
    $rez->saveFile();

