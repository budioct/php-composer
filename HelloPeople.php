<?php

/**
 * Aturan Pembuatan Source Code
 * ● Pada composer.json sebelumnya, kita sudah menggunakan namespace ProgrammerZamanNow di
 *   directory src
 * ● Artinya jika kita import class di namespace ProgrammerZamanNow, nama dia akan include file di
 *   directory src
 * ● Jika namespace nya ProgrammerZamanNow, maka foldernya adalah src, jika namespace nya
 *   ProgrammerZamanNow\Data, maka foldernya adalah src/Data
 * ● Sedangkan untuk nama file, harus sama dengan nama class, jika nama class nya People, maka nama
 *   file harus People.php
 *
 * file: composer.json
 * "autoload": {
 * "psr-4": {
 * "AnakOmMamat\\": "src/"
 * }
 * },
 *
 */

require_once "vendor/autoload.php"; // otomatis akan import library dari composer

use AnakOmMamat\Data\People; // import namespace yang sudah di buat di file src

$people = new People("budhi"); // instance
$people->sayHello("jamal");
