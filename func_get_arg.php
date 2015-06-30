<?php

function hi()
{    
    print func_get_arg(0) . PHP_EOL;    
}

//hi(); //warning

hi('marabesi');