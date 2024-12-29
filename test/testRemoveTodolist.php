<?php 

require_once "../model/todolist.php";
require_once "../businessLogic/addTodolist.php";
require_once "../businessLogic/showTodolist.php";
require_once "../businessLogic/removeTodolist.php";


addTodolist("Aliezzar");
addTodolist("Wijaya");
addTodolist("Budi");
addTodolist("Joko");
addTodolist("John");

showTodolist();

removeTodolist(3);

showTodolist();

removeTodolist(2);

showTodolist();

$success = removeTodolist(4);
var_dump($success);

showTodolist();