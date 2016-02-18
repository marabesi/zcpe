<?php

//print file_get_contents('ssh2.tunnel://matheus:ASDMMP@192.168.1.106:22/home/matheus/teste.txt');


$ssh = ssh2_connect('192.168.1.106');

ssh2_auth_password($ssh, 'matheus', 'ASDMMP');

$ftp = ssh2_sftp($ssh);


$file = fopen("ssh2.sftp://$ftp/home/matheus/teste.txt", 'r');

while($line = fgets($file)) {
    print $line;
}