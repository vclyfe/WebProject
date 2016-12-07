<html>
<head>
<script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.3.3/angular.min.js"></script>

<!--Code below is the code for angularJSapp -->

<script>

var myapp=angular.module("myapp",[]);

myapp.controller("control",function($scope){});

</script>

</head>
<body>
<form method="POST" action="">
<input type="text" name="dname" ng-model="bval">
<input type="submit" value="Go To Directory">
</form>

<?php

class view 
{

private $model;
private $control;

function __construct($m,$c) {
$this->model=$m;
$this->control=$c;
}

function init()
{
		if(isset($_POST["dname"])) {
		$this->control->config();
		$this->display();
		}
		else {
		$this->display();
		}
}

function display() {

		echo "Contents of the directory are as follows: \n";
		for($i=0;$i<sizeof($this->model->arr);$i++) {
			if(is_file($this->model->arr[$i]))echo "<br>".$this->model->arr[$i]."<br>";
			else if(($this->model->arr[$i]!='.')&&($this->model->arr[$i]!='..')) echo $this->model->arr[$i]."<input type='button' value='".$this->model->arr[$i]."'>";
echo "<br>";

		}
		
		echo "<br> Current directory: ".$this->model->dir."<br>";

		echo "<br>".sizeof($this->model->arr)." is the no. of all contents! <br>";

		echo "<br>".sizeof($this->model->farr)." is the no. of all files! <br>";

		echo "<br>".sizeof($this->model->darr)." is the no. of all directories! <br>";

} //display function end

} //class end

?>
</body>
</html>
