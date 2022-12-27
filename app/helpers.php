<?php

use Illuminate\Support\Facades\Route;


function route_class_l1($route_name)
{
    $r=Route::currentRouteName();
    if ($route_name==$r)
    {
        return "open active";
    }
}

function route_class_l2($route_name)
{
    $r=Route::currentRouteName();
    if ($route_name==$r)
    {
        return "active";
    }
}



function route_()
{
    $r=Route::currentRouteName();

    if ($r=="home")
    {
        return "active";
    }
    elseif ($r=="home2")
    {
        return $r;
    }
    else
    {
        return "test";
    }

}
