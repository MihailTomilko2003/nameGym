<?php 
class Clients {
    public static function getClients(){
        global $mysqli;
        $client = [];
        $result = $mysqli->query("SELECT * FROM clientsNameGym");
        while (($row = $result->fetch_assoc()) != NULL){
            $client[] = $row;
        }
        return json_encode($client);
    }
    public static function deleteClient($id){
        global $mysqli;
        $id = (int)$id;
        $mysqli->query("DELETE FROM `clientsNameGym` WHERE `id` = $id");
        header("Location: /nameGym/clients");
    }
    public static function editClient($id){
        global $mysqli;
        $new_rate = $_POST['newRate'];
        $new_date = $_POST['newDate'];
        $mysqli->query("UPDATE `clientsNameGym` SET `rate`='$new_rate', `end` = '$new_date' WHERE `id` = $id");
        header("Location: /nameGym/clients");
    }
    public static function addClient(){
        global $mysqli;
        $rate = $_POST['rate'];
        $endDate = $_POST['endDate'];
        $startDate = $_POST['startDate'];
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $surname = $_POST['surname'];
        $mysqli->query("INSERT INTO `clientsNameGym` (`name`, `lastname`, `surname`, `rate`, `start`, `end`) VALUES ('$name', '$lastname', '$surname', '$rate', '$startDate', '$endDate');");
        header("Location: /nameGym/clients");
    }
}
