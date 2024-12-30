<?php

require_once "../helper/input.php";
require_once "../model/todolist.php";
require_once "../businessLogic/addTodolist.php";

function viewAddTodolist() {
    echo "MENAMBAH TODO" . PHP_EOL;

    $todo = input("Todo (x untuk batal)");
    

    if ($todo == "x") {
        echo "Batal Menambahkan Todo" . PHP_EOL;
    } else {
        addTodolist($todo);
    }
}