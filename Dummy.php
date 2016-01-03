<?php
/**
 * Created by PhpStorm.
 * User: ferrantelli
 * Date: 01/01/16
 * Time: 18.55
 */

namespace App;


$a = array(
    'gianluca',
    'luca'
);
foreach ($a as $item) {
    $html .= $item;
}


class Dummy
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Dummy
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function toberefactored()
    {
        $html= '';



    }


}