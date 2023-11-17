<?php

function getData()
{
    $channelsJSON = file_get_contents(__DIR__ . '\payloadStripe.json');
    $channelsPHP = json_decode($channelsJSON, true);
    
    return $channelsPHP;
}

function getDataById($id)
{
    $datos = getData();
    foreach ($datos as $dato) {
        if ($dato['id'] == $id) {
            return $dato;
        }
    }
    return null;
}

?>