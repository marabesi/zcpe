<?php

$str = '<p>P paragraph</p> <a href="mylink">MyLink</a>';

echo strip_tags($str);

echo PHP_EOL;

echo strip_tags($str, '<p><a>');

echo PHP_EOL;