<?php

namespace App\Services;

use App\Entity\Artwork;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class ImageSize extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new TwigFunction('ImageSize', [$this, 'ImageSize']),
        ];
    }
//
        public function ImageSize(Artwork $artwork)
        {

        $fileName = $artwork->getFileName();
        $url = '../public/pics/artworks/';
        $fullName = $url . $fileName;
//        var_dump($fullName);
        $size = getimagesize($fullName);
        $width = $size[0];
        $height = $size[1];


        return ($size[1] * 30 / 100) . "px";

    }

}
