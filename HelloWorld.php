<?php

/**
 * Hello World
 * ● Composer secara otomatis akan menyimpan semua library yang kita gunakan di directory vendor
 * ● Lantas bagaimana cara include file library nya?
 * ● Kita tidak perlu melakukan satu per satu, kita cukup menggunakan file /vendor/autoload.php yang
 *   sudah secara otomatis di generate oleh composer
 * ● File autoload.php tersebut bisa secara otomatis meng-include class-class yang kita butuhkah di
 *   library
 * ● Jadi di file PHP kita, kita cukup hanya menambahkan autoload.php saja
 *
 * Autoload
 * ● Composer menggunakan fitur PHP Class Autoload untuk load class yang terdapat di directory
 *   vendor
 * ● https://www.php.net/manual/en/language.oop5.autoload.php
 * ● Selain itu, kita juga bisa memasukkan source code di project kita ke autoload agar kita tidak perlu
 *   melakukan include satu per satu file PHP class nya
 * ● Namun agar bisa autoload, ada standar yang perlu kita ikuti
 *
 * tambahkan script di bawah di file composer.json
 * "autoload": {
 * "psr-4": {
 * "Anakommamat\\PhpComposer\\": "src/"
 * }
 * },
 *
 * composer dump-autoload
 * ● Setelah kita menambah autoload, kita perlu melakukan generate ulang file autoload.php
 * ● Untuk melakukan itu, kita bisa menggunakan perintah :
 * composer dump-autoload
 *
 * C:\Dev\2024\PHP\php-composer: composer dump-autoload
 * Generating autoload files
 * Generated autoload files
 *
 */

require_once __DIR__ . '/vendor/autoload.php'; // secara otomatis di generate oleh composer include file library, di file project

echo "Hello World!\n";
