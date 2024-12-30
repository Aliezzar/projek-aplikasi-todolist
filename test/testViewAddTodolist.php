<?php

require_once "../view/viewAddTodolist.php";
require_once "../businessLogic/showTodolist.php";
require_once "../businessLogic/addTodolist.php";

addTodolist("Mandi Pagi");
addTodolist("Sarapan");
addTodolist("Sekolah");

viewAddTodolist();

showTodolist();

viewAddTodolist();

showTodolist();