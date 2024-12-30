<?php

require_once "../businessLogic/showTodolist.php";
require_once "../view/viewAddTodolist.php";
require_once "../view/viewRemoveTodolist.php";
require_once "../helper/input.php";
require_once "../model/todolist.php";
function viewShowTodolist() {

    while (true) {
        showTodolist();

    echo "MENU" . PHP_EOL;
    echo "1. Tambah Todo" . PHP_EOL;
    echo "2. Hapus Todo" . PHP_EOL;
    echo "x. Keluar". PHP_EOL;

    $pilihan = input("Pilih");

    if ($pilihan == "1") {
        viewAddTodolist();
    } elseif ($pilihan === "2") {
        viewRemoveTodolist();
    } elseif ($pilihan == "x") {
        break;
    } else {
        echo "pilihan tidak dimengerti" . PHP_EOL;
    }
    }

    echo "Sampai jumpa lagi" . PHP_EOL;
}