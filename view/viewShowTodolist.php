<?php

require_once __DIR__ . "/../businessLogic/showTodolist.php";
require_once __DIR__ . "/../view/viewAddTodolist.php";
require_once __DIR__ . "/../view/viewRemoveTodolist.php";
require_once __DIR__ . "/../helper/input.php";
require_once __DIR__ . "/../model/todolist.php";
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