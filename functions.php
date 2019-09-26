<?php
function sum($x, $y)
{
    return $x + $y;
}

assert(1 === sum(1, 0));
assert(46 === sum(12, 34));