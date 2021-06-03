<?php


class Session extends Exception
{
    public $table = [];

    public function __set($name, $value)
    {
        $this->table[$name] = $value;

    }


    public function __get($name)
    {
        echo '<br> This is the get - ';
        return $this->table[$name];
    }



    public function __isset($name)
    {

        return isset ($this->table[$name]);
    }

    public function __unset($name)
    {

     unset($this->table[$name]);
    }



    public function setAttribute()
    {
        return $this->table;
    }

}