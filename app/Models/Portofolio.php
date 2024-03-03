<?php

namespace App\Models;

class Portofolio
{
    private static $Portofolio = [];

    public static function all()
    {
        return self::$Portofolio;
    }

    public static function addPortofolio($title, $image, $link)
    {
        self::$Portofolio[] = [
            "title" => $title,
            "image" => $image,
            "link" => $link
        ];
    }
}

/* -------------------------------------------------------------------------- */
/*                                 Portofolio                                 */
/* -------------------------------------------------------------------------- */

Portofolio::addPortofolio(
    "Kalkulator", //title
    "https://portofolio-kangal.vercel.app/image/portofolioImg/kalkulator.svg", //image 
    "https://muhamadafghan.github.io/Kalkulator/" //link
);
Portofolio::addPortofolio(
    "Tebak Angka", //title
    "https://portofolio-kangal.vercel.app/image/portofolioImg/game.svg", //image 
    "https://muhamadafghan.github.io/tebakAngka/" //link
);
Portofolio::addPortofolio(
    "Book Shelf", //title
    "https://portofolio-kangal.vercel.app/image/portofolioImg/portofolio1.svg", //image 
    "https://muhamadafghan.github.io/BookShelf/" //link
);