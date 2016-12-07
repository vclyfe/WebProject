<?php

class model
{

public $dir; //directory as a string
public $arr; //to store all elements of directory
public $farr; //to store files
public $darr; //to store directories

function __construct()
{
$this->dir=getcwd();
}

}
?>
