<?php

/**
 * Created by PhpStorm.
 * User: ylafontaine
 * Date: 2017-02-28
 * Time: 11:00
 */
class upload
{

    public static function image($fileFieldName)
    {

        //Define storage
        $storage = new \Upload\Storage\FileSystem($_SERVER['DOCUMENT_ROOT'] . '/uploads/');
        $file = new \Upload\File($fileFieldName, $storage);


        //Rename file
        $new_filename = uniqid();
        $file->setName($new_filename);


        //File validation
        $file->addValidations([
            new \Upload\Validation\Mimetype([
                'image/png',
                'image/gif',
                'image/bmp',
                'image/jpeg',
                'image/pjpeg',
            ]),
            new \Upload\Validation\Size('5M'),
        ]);


        //File data
        $data = [
            'name'       => $file->getNameWithExtension(),
            'extension'  => $file->getExtension(),
            'mime'       => $file->getMimetype(),
            'size'       => $file->getSize(),
            'md5'        => $file->getMd5(),
            'dimensions' => $file->getDimensions(),
        ];


        //Upload
        try {
            $file->upload();

            return [
                "exit_code" => 0,
                "file_name" => $file->getNameWithExtension(),
            ];
        } catch (\Exception $e) {
            return [
                "exit_code" => 1,
                "file_name" => $file->getErrors(),
            ];
        }
    }
}