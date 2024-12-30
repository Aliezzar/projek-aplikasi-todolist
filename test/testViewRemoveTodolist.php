<?php

require_once "../model/todolist.php";
require_once "../view/viewRemoveTodolist.php";
require_once "../businessLogic/addTodolist.php";
require_once "../businessLogic/showTodolist.php";

addTodolist("Bangun Pagi");
addTodolist("Mandi");
addTodolist("Sarapan");
addTodolist("Berangkat sekolah");

showTodolist();

viewRemoveTodolist();

showTodolist();