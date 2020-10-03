<?php

/** 
 * 
 * poin 2
 * 
 * - 1 || Buatlah sebuah class dengan menginplementasikan access modifier pada method maupun properties
 * - 1 || invoke/call method yang kalian buat dengan visibilitas static maupun non static
 */

class accesMod
{
    public $name;

    public function setName($nama)
    {
        $this->name=$nama;
    }
}

$oop = new accesMod();
$oop->setName("Reza Aditya");
echo $oop->name;
