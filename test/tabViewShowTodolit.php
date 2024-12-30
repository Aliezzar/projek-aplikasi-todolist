<?php

require_once "../view/viewShowTodolist.php";
require_once "../businessLogic/addTodolist.php";

addTodolist("Sekolah");
addTodolist("Sekolah Lagi");
addTodolist("Belajar");
addTodolist("Belajar Lagi");

viewShowTodolist();