<?php

require_once "../model/todolist.php";
require_once "../businessLogic/addTodolist.php";

addTodolist("Aliezzar");
addTodolist("Wijaya");
addTodolist("Budi");

var_dump($todolist);