<?php
function setActive($route)
{
    return request()->routeIs($route) ? 'bg-appsalidas text-white' : '';
}
