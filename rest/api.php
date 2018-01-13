<?php
/**
 * Created by PhpStorm.
 * User: José Luis Macedo <jlmacedo89@hotmail.com>
 * Date: 13/01/2018
 * Time: 15:25
 */
$request = @$_GET['t'];

if($request == '1')
{
    die(json_encode(['content' => 'Working!']));
}