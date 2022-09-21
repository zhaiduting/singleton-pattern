<?php

function print_rn($msg, $return = false)
{
    $msg = print_r($msg, true);
    if ($return)
        return $msg;
    if (isset($_SERVER['HTTP_USER_AGENT']))
        $msg = "<pre>$msg</pre>";
    else
        $msg .= !str_ends_with($msg, "\n") ? "\n" : '';
    return print($msg);
}
