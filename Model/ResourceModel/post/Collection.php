<?php
declare(strict_types=1);

namespace MageMastery\Blog\Model\ResourceModel\Post;

use Magento\Framework\Model\ResourceModel\Db\collection\AbstractCollection;
use MageMastery\Blog\Model\Post;
use MageMastery\Blog\Model\ResourceModel\Post as PostResource;

class collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(model: Post::class, resourceModel: PostResource::class);
    }
}