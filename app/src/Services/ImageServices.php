<?php
namespace App\Services;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Liip\ImagineBundle\Imagine\Cache\CacheManager;
use Liip\ImagineBundle\Imagine\Data\DataManager;
use Liip\ImagineBundle\Imagine\Filter\FilterManager;

class ImageServices
{
    private $cacheManager;
    private $dataManager;
    private $filterManager;

    public function __construct(CacheManager $cacheManager, DataManager $dataManager, FilterManager $filterManager) {
        $this->cacheManager  = $cacheManager;
        $this->dataManager   = $dataManager;
        $this->filterManager = $filterManager;
    }

    public function filter(int $width, int $height) {
        $filter = 'my_thumb'; // Name of the `filter_set` in `config/packages/liip_imagine.yaml`
        $imagePath='uploads/images/5';
        $path = 'uploads/images/6312d7c56cbe1-1662179269.jpg'; // Path of the image, relative to `/public/`
        if(!is_dir($imagePath)){
             mkdir($imagePath,0777,true);
         }
        if (!$this->cacheManager->isStored($path, $filter)) {
            $binary = $this->dataManager->find($filter, $path);
            $filteredBinary = $this->filterManager->applyFilter($binary, $filter, [
                'filters' => [
                    'thumbnail' => [
                        'size' => [$width, $height]
                    ]
                ]
            ]);

            $this->cacheManager->store($filteredBinary, $path, $filter);
        }
        return new RedirectResponse($this->cacheManager->resolve($path, $filter), Response::HTTP_MOVED_PERMANENTLY);
    }
}