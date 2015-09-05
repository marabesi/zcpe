<?php

//creates a file even if it not exists
$fp = fopen( 'myfile.txt', 'w' );

if ( $fp ) {
  fwrite( $fp, 'my content' );
}

fclose($fp);


