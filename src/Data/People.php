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

namespace AnakOmMamat\Data;

class People
{

    public function __construct(private string $name)
    {
    }

    public function sayHello(string $name){

        echo "Hello $name, My name is $name" . PHP_EOL;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }



}