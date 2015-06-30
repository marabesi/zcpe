<?php

function foo()
{
    var_dump(func_get_args());
}

foo(); // empty array

/**
 * array(2) {
  [0] =>
  string(5) "hello"
  [1] =>
  string(5) "world"
}
 */
foo('hello', 'world'); 