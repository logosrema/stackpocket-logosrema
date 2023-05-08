<?php
 declare(strict_types =1);
 spl_autoload_register(function($class){
   require __DIR__."/src/$class.php";

 });
 
set_exception_handler('ExceptionHandler::handleExeception');

header("Content:type:application/json, charset=UTF-8");


$parts= explode("/",$_SERVER["REQUEST_URI"]);
//var_dump($parts);

if($parts[2] != "product"){
   exit(http_response_code(404));
}

$id = $parts[3] ?? null;
//print_r($id);
 $database = new Database;
 $getProduct =new getProduct($database);
 $control = new ControlClass($getProduct);
// $database->Dbconection();
$control->processData($_SERVER["REQUEST_METHOD"],$id);