<?php 
    include('modules/PAC/Models/Client.php'); 

    if( isset( $_POST['comboValue'] ) && ! empty( $_POST['comboValue'] ) ) {
        $client = PAC_Client_Model::getInstance();
        $resultAccount = $client->getAccountNameByCatCode($_POST['comboValue']);
        echo json_encode(array("codeAccount" => $resultAccount['0'], "nameAccount" => $resultAccount['1']));
    }
    exit; 
?>

