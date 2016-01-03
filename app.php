<?php


function alfa(){
    beta();
}

function beta(){
    
}


class Pippo{
    public function gianluca()
    {

        $n = '';
        $array = [
            'gianluca',
            'mauro',
            'alòessandro'
        ];

        $this->getEnne($array, $n);


        $a = [
            0 => 'gianluca',
            1 => 'luca'
        ];

    }

    /**
     * @param $array
     * @param $n
     */
    protected function loopOverVariable($array, $n)
    {

    }

    /**
     * @param $array
     * @param $n
     */
    private function getEnne($array, $n)
    {
        foreach ($array as $item) {
            $n .= $item;
        }
    }
}

class Dummy{

    private $name;

    private $surname;

    /**
     * @return mixed
     */
    public function getName()
    {
        $this->getA();
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Dummy
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     * @return Dummy
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
        return $this;
    }



    /**
     * Dummy constructor.
     */
    public function __construct()
    {
    }

    public function getA()
    {
        return $this->getAA();
    }

    public function getAA()
    {
        $a = 'ciao';
    }


}