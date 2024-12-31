<?php

require_once __DIR__ . "/../helper/input.php";
require_once __DIR__ . "/../businessLogic/removeTodolist.php";

function viewRemoveTodolist() {
    echo "MENGHAPUS TODO" . PHP_EOL;

    $pilihan = input("Nomor (x untuk batalkan)");

    if($pilihan == "x") {
        echo "Batal menghapus Todo" . PHP_EOL;
    } else {
        $success = removeTodolist($pilihan);

        if ($success) {
            echo "Sukses menghapus todo nomor $pilihan" . PHP_EOL;
        } else {
            echo "Gagal menghapus todo nomor $pilihan" . PHP_EOL;
        }
    }
}