<?php


class Session extends Exception
{
//0. Dans la classe session créer un attribut publique $attribut = [];
    public $attribute = [];


//1.Dans la classe session créer une fonction add($key, $value) qui ajoute une clé et une
//valeur dans le tableau $attribut

    public function add($key, $value)
    {
        return $this->attribute[$key] = $value;
    }

//2.Dans la classe session créer une fonction update($key, $value) qui met à jour la
//valeur du tableau ayant la clé $key

    public function update($key, $value)
    {
        return $this->attribute[$key] = $value;
    }

//4.Dans la classe Session utilisez la fonction __set qui appel la fonction add() créer
//précédemment pour ajouter un attribut dans notre tableau d’attribut
    public function __set($key, $value)
    {
//        $this->attribute[$name] = $value;

          $this->add($key, $value);
    }

    public function __get($name)
    {
        echo '<br> This is the get - ';
        return $this->attribute[$name];
    }


    public function __isset($name)
    {

        return isset ($this->attribute[$name]);
    }

    public function __unset($name)
    {

        unset($this->attribute[$name]);
    }


}