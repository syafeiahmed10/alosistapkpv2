<?php


include 'function.php';


   
         $datas = $collection->findOne(['_id' => $_GET['id']]);


  


   $json = [];
    foreach ($datas as $data){
        $json[$data->_id] = $data->kecamatan;
    }


   echo json_encode($json);
