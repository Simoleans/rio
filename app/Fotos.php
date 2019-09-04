<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fotos extends Model
{
    public function generateImage($img)
    {
        
        foreach ($img as $i) {
            $nombre = 'foto'.date("dmYhisA").'.png';
            $carpeta = public_path().'/fotos/'.$nombre;

            $image = explode(";base64,", $i);

            $image_base64 = base64_decode($image[1]);

            $file = $carpeta.$nombre;

            file_put_contents($file, $image_base64);
        }
       
    	// $nombre = 'foto'.date("dmYhisA").'.png';
     //    $carpeta = public_path().'/fotos/'.$nombre;

     //    $image = explode(";base64,", $img);

     //    $image_base64 = base64_decode($image[1]);

     //    $file = $carpeta.$nombre;

     //    file_put_contents($file, $image_base64);

    }

}
