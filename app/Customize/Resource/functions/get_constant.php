<?php

/*
 * Fetch Constant Value
 */
function get_constant($id, $default = null)
{
    $eccube_const = \Eccube\Common\Constant::class;
    $const = \Customize\Common\Constant::class;

    $ref_const = new ReflectionClass($const);
    $ref_eccube_const = new ReflectionClass($eccube_const); 
    if ($ref_const->hasConstant($id)) {
        return $ref_const->getConstant($id);
    } elseif ($ref_eccube_const->hasConstant($id)) {
        return $ref_eccube_const->getConstant($id);
    }
    return $default;
}


