<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.3/angular.min.js"></script>
<script>

var main=angular.module("myapp",[]);
main.controller("control",function($scope,$http){
$scope.func=function(value) {
document.getElementById("message").textContent="";
console.log($scope.uuu);
var request = $http({
    method: "post",
    url:"verif.php",
    data: {text: $scope.uuu},
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
});

/* Check whether the HTTP Request is successful or not. */
request.success(function (data) {
    document.getElementById("message").textContent = "Data transfer successful "+data;
    $scope.lulz=data;
  angular.forEach($scope.lulz,function(data){console.log(data);});
});
}
$scope.func1=function(value) {
document.getElementById("message").textContent="";
console.log($scope.uuu);
var request = $http({
    method: "post",
    url:"verif.php",
    data: {text: $scope.uuu1},
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
});

/* Check whether the HTTP Request is successful or not. */
request.success(function (data) {
    document.getElementById("message").textContent = "Data transfer successful "+data;
    $scope.lulz=data;
  angular.forEach($scope.lulz,function(data){console.log(data);});
});
}
});

</script>
<?php $vara=getcwd();?>
</head>
<body>

<div ng-app="myapp" ng-controller="control">

<form>
<input name="text" ng-model="text" type="text">
<button name="lol" ng-init="uuu='<?php echo $vara."/lol"; ?>'" ng-click="func()">lol</button>
<button name="lel" ng-init="uuu1='<?php echo $vara."/lel"; ?>'" ng-click="func1()">lel</button>
<input type="submit" value="Submit!">
</form>
<span id="message"></span>
<span ng-bind="lulz"></span>
</div>
</body>
</html>
