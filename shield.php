<?php

/* this function shield Special symbols for JQuery */
function shieldUuid($uuid){

    $array_needles = [ ",", ".", ":"];

    foreach ($array_needles as $needle){
        $offset = 0;
        while ( ($position = strpos($uuid, $needle, $offset)) !== false){
            $uuid = substr_replace($uuid, "\\\\", $position, 0);
            $offset = $position + 3;
        }
    }

    return $uuid;
}

?>
