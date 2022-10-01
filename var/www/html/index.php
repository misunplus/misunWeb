<?php
require './vendor/autoload.php';
$param = Array('region'=>'ap-northeast-2', 'version'=>'2015-10-01');
print_r($param);
//$ec2 = new Aws\Ec2\Ec2Client($param);
//$instances = $ec2->describeInstances([]);
//print($instances);

//echo '<h1> not port php </h1>';
//echo "<h1>123</h1>";
//
//require 'vendor/autoload.php';
//$param = Array('region'=>'ap-northeast-2','version'=>'latest',);
//$ec2 = new Aws\Ec2\Ec2Client($param);
//$instances = $ec2->describeInstances([]);
//print_r($instances['Reservations'][0]['Instances'][0]['NetworkInterfaces'][0]['Association']['PublicIp']."\n");
?>


