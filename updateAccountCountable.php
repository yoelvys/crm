<?php 
    include('modules/PAC/Models/Client.php'); 

    if( isset( $_POST['comboValue'] ) && ! empty( $_POST['comboValue'] ) ) {
        $client = PAC_Client_Model::getInstance();
        $nameAccount = $client->getAccountNameByCatCode($_POST['comboValue']);
        echo $nameAccount; 
    }
    exit; 
?>

