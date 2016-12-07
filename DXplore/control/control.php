<?php

class control
{
private $mod;

/*

initializes the model to controller

*/

function __construct($val) {

$this->mod=$val; 
$this->dividelist();       //in case there's no POST input in the form, this shows data for base directory.
}

/*

Initial Configuration 

*/

function config()
{
$this->mod->dir=$_POST["dname"];  //model->div has only the relative "dname" ie for example "control"
chdir($this->mod->dir);  
$this->mod->dir=getcwd();         //give abs. address to "model->div" variable ie now it has "/var/www/html/DXplore/control"
$this->dividelist();              //to divide into lists
}

/*

called from ^ constructor/configuration function. divides the model's directory into list of files and directories

*/

function dividelist() { //divides it into arrays of files and of directories and stores in model

			$this->mod->arr=scandir($this->mod->dir);

			for($i=0,$k=0,$l=0;$i<sizeof($this->mod->arr);$i++){

				if(is_file($this->mod->arr[$i])){
					$this->mod->farr[$k]=$this->mod->arr[$i];$k++;
					}

				else {
					$this->mod->darr[$l]=$this->mod->arr[$i];$l++;
					}

				}
		
		}  //function dividelist end

}

?>
