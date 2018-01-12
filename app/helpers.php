<?php
function setActive($path)
{
    return strpos(Request::getPathInfo(), $path) ? ' class=active' :  '';
}