<?php

function print_rn($msg, $return = false)
{
    $msg = print_r($msg, true);
    if ($return)
        return $msg;
    if ($_SERVER['HTTP_USER_AGENT'])
        $msg = "<pre>$msg</pre>";
    else
        $msg .= substr($msg, -1, 1) !== "\n" ? "\n" : '';
    return print($msg);
}
