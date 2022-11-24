<?php


namespace Machine\Filesystem;


use Machine\Support\Checker;

class UploadFile extends Uploader
{

    protected $width;
    protected $height;


    public static function storage($path, $file, $size, $name = null)
    {

        if( Checker::mimeTypeForImage($file['type'])  !== false){
            return (new static())->newImageUpload($path, $file, $size, $name);

        }elseif ( Checker::mimeTypeForMedia($file['type']) !== false){
            return (new static())->newImageMedia($path, $file, $name);

        }elseif ( Checker::mimeTypeForArchives($file['type']) !== false){
            return (new static())->newImageArchive($path, $file, $name);

        }else{
            echo ('File not support..');
        }

    }

    public function setSize($file){
        $this->width = getimagesize($file['tmp_name'])[0];
        $this->height = getimagesize($file['tmp_name'])[1];

    }

    /**
     * @param $path
     * @param $file
     * @param $size
     * @param $name
     * @return STRING
     */
    public function newImageUpload($path, $file, $size, $name)
    {
        if (empty($size)){
            $this->setSize($file); 
        }else{
            $this->width = $size['w'];
            $this->height = $size['h'];
        }

        $name = $name ?? md5(date('Ymdhis'));

        //$upload = new Upload();
        $this->Image($file, $name, $path, $this->width, $this->height);

        return $this->getResult();
    }

    /**
     * @param $file
     * @param $path
     */
    public function newImageMedia($path, $file)
    {
        return $this->Media();
    }

    /**
     * @param $file
     * @param $path
     */
    public function newImageArchive($path, $file)
    {
        return $this->File();
    }

}