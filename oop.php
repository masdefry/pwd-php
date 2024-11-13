<?php

// >>>>> Class & Object
// Berbeda dengan Javascript, di PHP diharuskan untuk Membuat Class Terlebih Dahulu
// untuk Membuat Object Baru
class Coba{
    public $a; 

    public function b(){

    }
};
$a = new Coba();
$b = new Coba();

class Product{
    public $name = '', 
    $description = '', 
    $price = 0;

    public function greeting(){
        return 'Hello, World!';
    }
};

$product1 = new Product();
$product1->name = 'Iphone 11';
var_dump($product1);

$product2 = new Product();
$product2->name = 'Samsung Galaxy A52 5G';
var_dump($product2);

$product3 = new Product();
var_dump($product3->greeting());



// Constructor 
class Film{
    public $title = '',
    $director = '',
    $description = '';

    public function __construct($title, $director, $description){
        $this->title = $title;
        $this->director = $director;
        $this->description = $description;
    }
}

$film1 = new Film('Ipar Adalah Maut', 'Hanung Bramantyo', 'Kisah Nyata');
var_dump($film1);

// Object Type
class PrintFilmData{
    // public function print($film){ 
    //     var_dump($film);
    //     $str = "{$film->title} | {$film->director} | {$film->description}";

    //     return $str;
    // }

    // Parameter `$film` diatas Possible Menerima Argument Apapun.
    // Agar Membatasi Hanya Menerima Data dari Class Film Saja,
    // Maka ditambahkan `Film $film`
    public function print(Film $film){ 
        var_dump($film);
        $str = "{$film->title} | {$film->director} | {$film->description}";

        return $str;
    }
}

$dataFilm1 = new PrintFilmData();
echo $dataFilm1->print($film1);



// Inheritance
// Case. Rental Komik & CD Game. Dimana Keduanya Memiliki Props yang Hampir Sama
// Komik    : title, price, releaseYear, writer, totalPages
// Game     : title, price, releaseYear, developedBy, edition
class RentalProduct{
    
}