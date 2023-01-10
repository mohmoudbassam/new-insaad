<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Ramsey\Uuid\Uuid;

trait Uploadable
{

    /**
     * @param UploadedFile $file
     * @param null $domain
     * @return string
     * @throws \Exception
     */
    public function uploadOne(UploadedFile $file, $width, $height, $domain = null)
    {
        return $this->upload($file, $this->uniqueFileName($file), $width, $height, $domain);
    }


    /**
     * @param array $files
     * @param null $domain
     * @return array
     * @throws \Exception
     */
    public function uploadMultiple(array $files, $domain = null)
    {
        $result = [];
        foreach ($files as $file) {
            $result[] = $this->upload($file, $this->uniqueFileName($file), $domain);
        }
        return $result;
    }


    /**
     * @param $file
     * @param $name
     * @param null $domain
     * @return string
     */
    private function upload($file, $name, $width, $height, $domain = null)
    {
        $path = public_path('assets/images/' . $domain);

        if (!File::isDirectory($path)) {
            File::makeDirectory($path, 0777, true, true);
        }

        $img = Image::make($file)->resize($width, $height);
        $img->save($path . '/' . $name);
        return 'assets/images/' . $domain . '/' . $name;
    }


    private function uploadFiles($file, $domain = null)
    {
        $name = $this->uniqueFileName($file);

        $path = public_path('assets/images/' . $domain);

        if (!File::isDirectory($path)) {
            File::makeDirectory($path, 0777, true, true);
        }

        $file->move($path, $name);

        return 'assets/images/' . $domain . '/' . $name;
    }
    /**
     * @param $file
     * @return string
     * @throws \Exception
     */
    private function uniqueFileName(UploadedFile $file)
    {
        return Uuid::uuid4()->toString() . '.' . $file->extension();
    }
}
