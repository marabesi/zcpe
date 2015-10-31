<?php

$file = fopen('fprintf.txt', 'w+');

fprintf($file, 'Hello %s ', 'PHP');