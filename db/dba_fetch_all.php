<?php

$dba = dba_open('user.db', 'c', 'db4') or die('Error while opening user.db');

$key = dba_firstkey($dba);

while(false !== $key)
{
    $value = dba_fetch($key, $dba);
    
    print $key . ' => ' . $value . PHP_EOL;
    
    $key = dba_nextkey($dba);
}

dba_close($dba);
