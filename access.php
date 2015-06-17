<?php

class Building {}

$building = new Building();
$building->window = 'open'; //__set

print $building->window; //__get should output open

print $building->door; //notice undefined property
