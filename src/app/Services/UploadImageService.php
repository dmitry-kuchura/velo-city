<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;
use Image;
use Illuminate\Support\Facades\Storage;

class UploadImageService
{
    public function upload($request, $param)
    {
        // load resizing configs
        $config = config('image.crop.' . $param);

        // set filename
        $filename = $this->quickRandom() . '.jpg';

        foreach ($config as $key => $value) {
            if (isset($value['resize']) && (bool)$value['resize']) {
                $img = Image::make($request->image)->fit($value['width'], $value['height']);

                // add watermark
                if (isset($value['resize']) && (bool)$value['watermark']) {
                    $watermark = Image::make(public_path('images/logo-new.png'));
                    $img->insert($watermark, 'center')->encode('jpg');
                }

                $img->encode('jpg');
            } else {
                $img = Image::make($request->image)->encode('jpg');
            }

            try {
                Storage::disk('s3')->put('/' . $param . '/' . $value['path'] . '/' . $filename, $img->getEncoded());
            } catch (\Throwable $exception) {
                Log::error($exception->getMessage());
            }
        }

        return 'https://velo-city.s3-eu-west-1.amazonaws.com/' . $param . '/main/' . $filename;
    }

    public function uploadByLink(string $link, string $param): string
    {
        // load resizing configs
        $config = config('image.crop.' . $param);

        // set filename
        $filename = $this->quickRandom() . '.jpg';

        foreach ($config as $key => $value) {
            if (isset($value['resize']) && (bool)$value['resize']) {
                $img = Image::make($link)->fit($value['width'], $value['height']);

                // add watermark
                if (isset($value['resize']) && (bool)$value['watermark']) {
                    $watermark = Image::make(public_path('images/logo-new.png'));
                    $img->insert($watermark, 'center')->encode('jpg');
                }

                $img->encode('jpg');
            } else {
                $img = Image::make($link)->encode('jpg');
            }

            try {
                Storage::disk('s3')->put('/' . $param . '/' . $value['path'] . '/' . $filename, $img->getEncoded());
            } catch (\Throwable $exception) {
                Log::error($exception->getMessage());
            }
        }

        return 'https://velo-city.s3-eu-west-1.amazonaws.com/' . $param . '/main/' . $filename;
    }

    public static function quickRandom($length = 25)
    {
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        return substr(str_shuffle(str_repeat($pool, $length)), 0, $length);
    }
}
