<?php
require 'MinecraftVotifier.php';
require 'Config.php';
$name = $_REQUEST['name'];


use \Spirit55555\Minecraft\MinecraftVotifier;

$votifier = new MinecraftVotifier($key, $ip, '8192', 'Forever RolePlay');
$votifier->sendVote($name);
?>
<meta http-equiv="refresh" content="3;url=https://www.foreverroleplay.ga/">