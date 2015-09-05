<?php

$tplVars = [
  'hi',
  'marabesi'
];

print_r($tplVars);

print PHP_EOL;

print extract($tplVars, EXTR_PREFIX_ALL, 'm');

print PHP_EOL;

print $m_0;

print PHP_EOL;

print extract($tplVars, EXTR_PREFIX_INVALID, 'ma');

print PHP_EOL;

print $ma_0;

print PHP_EOL;
