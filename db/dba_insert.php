<?php

$dba = dba_open('user.db', 'c', 'db4') or die('Error while opening user.db');

//returns false if key => value exists already
if (dba_insert('user', 'matheus marabesi', $dba)) 
{
    print 'Successful inserted' . PHP_EOL;
}
else
{
    print 'Error while inserting' . PHP_EOL;
}

dba_close($dba);