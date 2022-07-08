<?php

echo 'Name : ';
echo 'Salaph Alghibrany';
echo "\n";

echo "Name : ";
echo "Salaph\t Alghibrany\t\n";

echo <<<NAME
Selamat belajar PHP
sekarang, kita belajar tipe data string
ini adalah cara ke-3 membuat string
bisa menggunakan heredoc

NAME;

echo <<<'NAME'
Selamat belajar PHP
sekarang, kita belajar tipe data string
ini adalah cara ke-3 membuat string
bisa menggunakan heredoc
NAME;
