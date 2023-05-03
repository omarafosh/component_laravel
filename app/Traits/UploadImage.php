<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;

/**
 * 
 */
trait UploadImage
{
    public $type_image = ".jpg,.png,.bmp";
    public $type_pdf = ".pdf";
    public $type_word = ".pdf";
    /**
     * 
     */
    private function SetTypeFile(string $type = "image")
    {
        $type_file = ".jpg,.png,.bmp";
        if ($type == "doc") {
            $type_file = ".doc,.docx";
        } elseif ($type == "xls") {
            $type_file = ".xls,.xlsx";
        } elseif ($type == "pdf") {
            $type_file = ".pdf";
        }
        return $type_file;
    }
    /**
     * limit_size : max size for file
     */
    public function StoreImage(
        UploadedFile $file,
        string $disk = "public",
        string $type = "image",
        string $thumb = null,
        string $table = null,
        int $limit_size = null,
    ) {
        if ($limit_size == null) {
            return "limit_size";
        }
        $file_without_extintion = "";
        $file_extintion = "";
        $file_size = "";
        $file_dimintion = "";
    }
    /**
     * 
     */
    public function RetraiveImage()
    {
    }
}
