<?php
echo "welcome to my game\n";
while (true) {
    echo "======== Game Tebak Angka =========\n";
    echo "Tebak sebuah angka antara 1 sampai 9!\n";
    $com = rand(1, 9);
    echo "Masukkan Tebakanmu : ";
    $player = trim(fgets(STDIN));
    if ($player == $com) {
        echo "Menang. Angka Com $com.\n";
        exit;
    } else {
        echo "Kalah. Angka Com $com.\n";
    }
}
