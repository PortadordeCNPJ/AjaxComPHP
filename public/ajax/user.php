<?php

require "../../config.php";

use app\models\User;

sleep(2);

$user = new User;

echo json_encode($user->all());
