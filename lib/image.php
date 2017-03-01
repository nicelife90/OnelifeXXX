<?php

/**
 * Created by PhpStorm.
 * User: ylafontaine
 * Date: 2017-02-28
 * Time: 17:18
 */
class image
{

    public static function generateSmall($input, $output)
    {

        //create black image 196 * 302
        $imagine = new Imagine\Gd\Imagine();
        $palette = new Imagine\Image\Palette\RGB();
        $size = new Imagine\Image\Box(196, 302);
        $color = $palette->color('#000', 100);
        $image = $imagine->create($size, $color);

        //left border
        $image->draw()->line(new Imagine\Image\Point(8, 10), new Imagine\Image\Point(8, 292), $image->palette()->color('#FF00CC'));
        $image->draw()->line(new Imagine\Image\Point(9, 10), new Imagine\Image\Point(9, 292), $image->palette()->color('#FF00CC'));
        $image->draw()->line(new Imagine\Image\Point(10, 10), new Imagine\Image\Point(10, 292), $image->palette()->color('#FF00CC'));

        //right border
        $image->draw()->line(new Imagine\Image\Point(186, 10), new Imagine\Image\Point(186, 292), $image->palette()->color('#FF00CC'));
        $image->draw()->line(new Imagine\Image\Point(187, 10), new Imagine\Image\Point(187, 292), $image->palette()->color('#FF00CC'));
        $image->draw()->line(new Imagine\Image\Point(188, 10), new Imagine\Image\Point(188, 292), $image->palette()->color('#FF00CC'));

        //top border
        $image->draw()->line(new Imagine\Image\Point(10, 10), new Imagine\Image\Point(186, 10), $image->palette()->color('#FF00CC'));
        $image->draw()->line(new Imagine\Image\Point(10, 11), new Imagine\Image\Point(186, 11), $image->palette()->color('#FF00CC'));
        $image->draw()->line(new Imagine\Image\Point(10, 12), new Imagine\Image\Point(186, 12), $image->palette()->color('#FF00CC'));

        //bottom border
        $image->draw()->line(new Imagine\Image\Point(10, 292), new Imagine\Image\Point(186, 292), $image->palette()->color('#FF00CC'));
        $image->draw()->line(new Imagine\Image\Point(10, 291), new Imagine\Image\Point(186, 291), $image->palette()->color('#FF00CC'));
        $image->draw()->line(new Imagine\Image\Point(10, 290), new Imagine\Image\Point(186, 290), $image->palette()->color('#FF00CC'));

        //resize uploaded image
        $image2 = $imagine->open($_SERVER['DOCUMENT_ROOT'] . '/uploads/' . $input);
        $image2->resize(new Imagine\Image\Box(175, 277));

        //add resized image to black image with border
        $image->paste($image2, new \Imagine\Image\Point(11, 13));

        //watermark
        $watermark = $imagine->open($_SERVER['DOCUMENT_ROOT'] . '/uploads/small_water.png');
        $size = $image->getSize();
        $wSize = $watermark->getSize();
        $bottomRight = new Imagine\Image\Point($size->getWidth() - $wSize->getWidth() - 18, $size->getHeight() - $wSize->getHeight() - 18);
        $image->paste($watermark, $bottomRight);

        //save new image
        $image->save($_SERVER['DOCUMENT_ROOT'] . '/uploads/' . $output, ['jpeg_quality' => 100]);

    }

    public static function generateBig($input, $output)
    {

        //create black image 196 * 302
        $imagine = new Imagine\Gd\Imagine();
        $palette = new Imagine\Image\Palette\RGB();
        $size = new Imagine\Image\Box(465, 642);
        $color = $palette->color('#000', 100);
        $image = $imagine->create($size, $color);

        //left border
        $image->draw()->line(new Imagine\Image\Point(8, 10), new Imagine\Image\Point(8, 630), $image->palette()->color('#FF00CC'));
        $image->draw()->line(new Imagine\Image\Point(9, 10), new Imagine\Image\Point(9, 630), $image->palette()->color('#FF00CC'));
        $image->draw()->line(new Imagine\Image\Point(10, 10), new Imagine\Image\Point(10, 630), $image->palette()->color('#FF00CC'));

        //right border
        $image->draw()->line(new Imagine\Image\Point(453, 10), new Imagine\Image\Point(453, 630), $image->palette()->color('#FF00CC'));
        $image->draw()->line(new Imagine\Image\Point(454, 10), new Imagine\Image\Point(454, 630), $image->palette()->color('#FF00CC'));
        $image->draw()->line(new Imagine\Image\Point(455, 10), new Imagine\Image\Point(455, 630), $image->palette()->color('#FF00CC'));

        //top border
        $image->draw()->line(new Imagine\Image\Point(10, 10), new Imagine\Image\Point(453, 10), $image->palette()->color('#FF00CC'));
        $image->draw()->line(new Imagine\Image\Point(10, 11), new Imagine\Image\Point(453, 11), $image->palette()->color('#FF00CC'));
        $image->draw()->line(new Imagine\Image\Point(10, 12), new Imagine\Image\Point(453, 12), $image->palette()->color('#FF00CC'));

        //bottom border
        $image->draw()->line(new Imagine\Image\Point(10, 630), new Imagine\Image\Point(453, 630), $image->palette()->color('#FF00CC'));
        $image->draw()->line(new Imagine\Image\Point(10, 629), new Imagine\Image\Point(453, 629), $image->palette()->color('#FF00CC'));
        $image->draw()->line(new Imagine\Image\Point(10, 628), new Imagine\Image\Point(453, 628), $image->palette()->color('#FF00CC'));

        //resize uploaded image
        $image2 = $imagine->open($_SERVER['DOCUMENT_ROOT'] . '/uploads/' . $input);
        $image2->resize(new Imagine\Image\Box(442, 615));

        //add resized image to black image with border
        $image->paste($image2, new \Imagine\Image\Point(11, 13));

        //watermark
        $watermark = $imagine->open($_SERVER['DOCUMENT_ROOT'] . '/uploads/big_water.png');
        $size = $image->getSize();
        $wSize = $watermark->getSize();
        $bottomRight = new Imagine\Image\Point($size->getWidth() - $wSize->getWidth() - 21, $size->getHeight() - $wSize->getHeight() - 21);
        $image->paste($watermark, $bottomRight);

        //save new image
        $image->save($_SERVER['DOCUMENT_ROOT'] . '/uploads/' . $output, ['jpeg_quality' => 100]);

    }

}