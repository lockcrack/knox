<?php
include ('config.php');
$data = json_decode(file_get_contents('https://aas1541.cellwe.samsungknox.com/IosAppRest/GetClientUpdateInfo?deviceId='.$deviceId));
echo $data->Url[0];
