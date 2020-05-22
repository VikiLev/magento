<?php

namespace Vika\QuickOrder\DataProvider;

use Magento\Ui\DataProvider\AbstractDataProvider;
use Vika\QuickOrder\Api\Model\Data\StatusInterface;
use Vika\QuickOrder\Model\ResourceModel\Status\CollectionFactory;

/**
 * Class StatusProvider
 * @package Thesis\QuickOrder\DataProvider
 */
class StatusProvider extends AbstractDataProvider
{
    /**
     * @param string            $name
     * @param string            $primaryFieldName
     * @param string            $requestFieldName
     * @param CollectionFactory $collectionFactory
     * @param array             $meta
     * @param array             $data
     */
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $collectionFactory,
        array $meta = [],
        array $data = []
    ) {
        $this->collection = $collectionFactory->create();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }

    public function getData()
    {
        if (isset($this->loadedData)) {
            return $this->loadedData;
        }

        $items = $this->collection->getItems();

        if (empty($items)) {
            return [];
        }

        /** @var $status StatusInterface */
        foreach ($items as $status) {
            $this->loadedData[$status->getId()] = $status->getData();
        }

        return $this->loadedData;
    }
}