<?php
$HAANGA_VERSION  = '1.0.3';
/* Generated from /home/crodas/projects/playground/haanga/tests/assert_templates/filter.tpl */
function haanga_7c948c919295fb106667df66f458e608eb775422($vars, $return=FALSE, $blocks=array())
{
    global $test_global;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo htmlentities(strtoupper($var)).'
'.htmlentities(strtolower(strtoupper($var))).'
'.htmlentities(str_replace('u', '', $var)).'
'.strlen($var).'
'.htmlentities(strtoupper((empty($foobar) == TRUE ? 'default value' : $foobar))).'
';
    $buffer1  = '
    hola que 
';
    echo strtoupper($buffer1).'
';
    $buffer1  = 'TAL';
    echo strtolower($buffer1).'
';
    $buffer1  = '
    hello world
';
    echo str_replace('e', '', strtolower(strtoupper($buffer1))).'
';
    if ($return == TRUE) {
        return ob_get_clean();
    }
}