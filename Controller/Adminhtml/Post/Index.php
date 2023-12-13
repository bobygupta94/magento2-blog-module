<?php
declare(strict_types=1);

namespace MageMastery\Blog\Controller\Adminhtml\Post;

use Magento\Backend\App\Action;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\View\Result\Page;


class index extends Action implements HttpGetActionInterface
{
    public function excute()
    {
       /** @var Page $resultPage */
        $resultPage =  $this->resultFacotry->create(ResultFactory::TYPE_PAGE);
        $resultPage->setActiveMenu('MageMastery_Blog::Post');
        $resultPage->getConfig()->getTitle()->prepend(__(Manage_Post));
        return $resultPage;

    }
}