<?php

include 'config.php';
$data = json_decode(file_get_contents($serverUrl.'/IosAppRest/GetClientUpdateInfo?deviceId='.$deviceId));
echo $data->Url[0];
