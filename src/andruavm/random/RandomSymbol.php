<?php
namespace andruavm\random;
/**
 * Created by PhpStorm.
 * User: User
 * Date: 05.07.2019
 * Time: 9:58
 */
class RandomSymbol
{
    public function getSymbol(){

        return chr(mt_rand(0,1000));
    }
}