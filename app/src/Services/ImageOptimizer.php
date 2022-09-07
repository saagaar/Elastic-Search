<?php 

namespace App\Services;

use Imagine\Gd\Imagine;
use Imagine\Image\Box;

class ImageOptimizer
{
    private const THUMBNAIL_MAX_WIDTH = 200;
    private const THUMBNAIL_MAX_HEIGHT = 150;
    private const LOADER_WIDTH = 10;
    private const LOADER_HEIGHT = 10;
    private const THUMBNAIL_DIR='thumbnail/';
    private const MINIMAL_DIR='minimal/';
    private $imagine;
    
    public function __construct()
    {
       $this->imagine = new Imagine();
    }
    public function resize(string $dir,string $originalImgDir,string $filename): void
    {
        if(!is_dir($dir.self::THUMBNAIL_DIR))
             mkdir($dir.self::THUMBNAIL_DIR,0777,true);
        if(!is_dir($dir.self::MINIMAL_DIR))
             mkdir($dir.self::MINIMAL_DIR,0777,true);
         // }
        list($iwidth, $iheight) = getimagesize($originalImgDir.$filename);
        $ratio = $iwidth / $iheight;
        $width = self::THUMBNAIL_MAX_WIDTH;
        $height = self::THUMBNAIL_MAX_HEIGHT;
        if ($width / $height > $ratio) {
            $width = $height * $ratio;
        } else {
            $height = $width / $ratio;
        }
      
        $photo = $this->imagine->open($originalImgDir.$filename);
        $photo->resize(new Box($width, $height))->save($dir.self::THUMBNAIL_DIR.$filename);
        $photo->resize(new Box(self::LOADER_WIDTH, self::LOADER_HEIGHT))->save($dir.self::MINIMAL_DIR.$filename);
    }
}