<?php

include 'config.php';
$data = json_decode(file_get_contents($serverUrl.'/IosAppRest/GetClientUpdateInfo?deviceId='.$deviceId));
if ($data->Status == true) {
    header('Location: '.$data->Url);
} else {
    echo "Error: No se ha podido acceder a los datos. Comprueba que has seguido las <a href='https://github.com/m1guelpiedrafita/knoxapi'>instrucciones de instalaci&oacute;n</a>";
    exit;
}
