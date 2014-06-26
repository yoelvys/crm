<?php 
    include('modules/PAC/Models/Client.php'); 

    if( isset( $_POST['inputValue'] ) && ! empty( $_POST['inputValue'] ) ) {
        $client = PAC_Client_Model::getInstance();
        $resultCode = $client->getExistCode($_POST['inputValue']);
        echo $resultCode;
    }
    exit; 
?>

